<?php
/**
 * Created by PhpStorm.
 * User: Ninon
 * Date: 10/08/2016
 * Time: 15:08
 */

namespace Entity;


use Wsdl2Php\StructType\EncryptionType;
use Wsdl2Php\StructType\UsernameTokenType;

class UsernameToken extends UsernameTokenType
{
    /**
     * @var string
     */
    protected $m_sClearPassword;
    /**
     * @var string
     */
    protected $m_sOasisSecurePassword;

    /**
     * @var string
     */
    protected $m_sSecret;

    public function __construct($sUsername, $sPassword, $sMode='', $sSecret='')
    {
        $this->Username         = $sUsername;
        $this->m_sSecret        = utf8_decode(trim(str_replace("\r", "", $sSecret)));
        $this->m_sClearPassword = $sPassword;

        if (!empty($this->m_sClearPassword))
        {
            $this->m_sOasisSecurePassword = base64_encode(md5($this->m_sClearPassword, true));
        }
        else
        {
            $this->m_sOasisSecurePassword = 'AAAAAAAAAAAAAAAAAAAAAA==';
        }

        if (empty($sMode))
            $sMode='';

        $this->Encryption = new EncryptionType($sMode);
    }

    /**
     * @return bool
     */
    public function bIsValid()
    {
        return !empty($this->Username);
    }

    /**
     * @return bool
     */
    public function bCrypted()
    {
        return !empty($this->Encryption->get_());
    }

    /**
     * @return string
     */
    public function getMode()
    {
        return $this->Encryption->get_();
    }
    /**
     * fonction permettant de générer le mot de passe encrypter compatible avec la norme oasis.
     * elle initialise au passage, le nonce et le created
     *
     * @param string $strPassword le mot de passe en encrypter
     */
    public function ComputeCryptedPassword()
    {
        $this->Created = date('r');
        $this->Nonce   = base64_encode(microtime());

        $sMd5 = base64_encode(md5($this->m_sSecret.$this->Nonce.$this->Created, true));
        $this->Encryption->setMd5($sMd5);

        switch($this->Encryption->get_())
        {
        default:
        case '':
            $this->_OASIS();
            break;
        case 'base64':
            $this->_Base64();
            break;
        case 'blowfish':
            $this->_Blowfish();
            break;
        }
    }

    /**
     * génère le mot de passe crypté pour OASIS (système d'identification par défaut)
     */
    protected function _OASIS()
    {
        $this->Password = base64_encode(sha1($this->Nonce.$this->Created.$this->m_sOasisSecurePassword, true));
    }

    protected function _Base64()
    {
        $sSecret = base64_encode(md5($this->Nonce.$this->m_sSecret.$this->Created, true));
        $securePassword = base64_encode($sSecret.$this->m_sClearPassword);
        $this->Password = $securePassword;
    }

    protected function _Blowfish()
    {
        $securePassword = base64_encode($this->Nonce.$this->m_sSecret.$this->Created);

        /* Open the cipher */
        $aMode = array('blowfish'=>MCRYPT_BLOWFISH);

        $td = mcrypt_module_open($aMode[$this->getMode()], '', 'cbc', '');

        /* Create the IV and determine the keysize length, use MCRYPT_RAND
         * on Windows instead */
        $iv = mcrypt_create_iv(mcrypt_enc_get_iv_size($td), MCRYPT_RAND);
        $this->Encryption->setIv(base64_encode($iv));
        $ks = mcrypt_enc_get_key_size($td);
        $this->Encryption->setKs($ks);

        /* Create key */
        $key = substr($securePassword, 0, $ks);

        /* Intialize encryption */
        mcrypt_generic_init($td, $key, $iv);

        /* Encrypt data */
        $this->Password = base64_encode(mcrypt_generic($td, $this->m_sClearPassword));

        /* Terminate encryption handler */
        mcrypt_generic_deinit($td);
        mcrypt_module_close($td);
    }
}