<?php

namespace NOUTSoap;

/**
 * Class which returns the class map definition
 * @package
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'LanguageCodeList' => '\\NOUTSoap\\StructType\\LanguageCodeList',
            'GetLanguagesResponse' => '\\NOUTSoap\\StructType\\GetLanguagesResponse',
            'EncryptionType' => '\\NOUTSoap\\StructType\\EncryptionType',
            'UsernameTokenType' => '\\NOUTSoap\\StructType\\UsernameTokenType',
            'ExtranetUserType' => '\\NOUTSoap\\StructType\\ExtranetUserType',
            'GetTokenSession' => '\\NOUTSoap\\StructType\\GetTokenSession',
            'GetTokenSessionResponse' => '\\NOUTSoap\\StructType\\GetTokenSessionResponse',
            'ResetPasswordFailed' => '\\NOUTSoap\\StructType\\ResetPasswordFailed',
            'ResetPasswordFailedResponse' => '\\NOUTSoap\\StructType\\ResetPasswordFailedResponse',
            'GetStartAutomatism' => '\\NOUTSoap\\StructType\\GetStartAutomatism',
            'GetStartAutomatismResponse' => '\\NOUTSoap\\StructType\\GetStartAutomatismResponse',
            'ConfirmResponse' => '\\NOUTSoap\\StructType\\ConfirmResponse',
            'ConfirmResponseResponse' => '\\NOUTSoap\\StructType\\ConfirmResponseResponse',
            'HasChangedResponse' => '\\NOUTSoap\\StructType\\HasChangedResponse',
            'SelectForm' => '\\NOUTSoap\\StructType\\SelectForm',
            'SelectFormResponse' => '\\NOUTSoap\\StructType\\SelectFormResponse',
            'SelectPrintTemplate' => '\\NOUTSoap\\StructType\\SelectPrintTemplate',
            'SelectPrintTemplateResponse' => '\\NOUTSoap\\StructType\\SelectPrintTemplateResponse',
            'GetPlanningInfo' => '\\NOUTSoap\\StructType\\GetPlanningInfo',
            'GetPlanningInfoResponse' => '\\NOUTSoap\\StructType\\GetPlanningInfoResponse',
            'GetColInRecord' => '\\NOUTSoap\\StructType\\GetColInRecord',
            'GetColInRecordResponse' => '\\NOUTSoap\\StructType\\GetColInRecordResponse',
            'Display' => '\\NOUTSoap\\StructType\\Display',
            'DisplayResponse' => '\\NOUTSoap\\StructType\\DisplayResponse',
            'CallingColumnType' => '\\NOUTSoap\\StructType\\CallingColumnType',
            'Create' => '\\NOUTSoap\\StructType\\Create',
            'CreateResponse' => '\\NOUTSoap\\StructType\\CreateResponse',
            'CreateFrom' => '\\NOUTSoap\\StructType\\CreateFrom',
            'CreateFromResponse' => '\\NOUTSoap\\StructType\\CreateFromResponse',
            'TransformInto' => '\\NOUTSoap\\StructType\\TransformInto',
            'TransformIntoResponse' => '\\NOUTSoap\\StructType\\TransformIntoResponse',
            'Modify' => '\\NOUTSoap\\StructType\\Modify',
            'ModifyResponse' => '\\NOUTSoap\\StructType\\ModifyResponse',
            'Update' => '\\NOUTSoap\\StructType\\Update',
            'UpdateResponse' => '\\NOUTSoap\\StructType\\UpdateResponse',
            'Print' => '\\NOUTSoap\\StructType\\_Print',
            'PrintResponse' => '\\NOUTSoap\\StructType\\PrintResponse',
            'Delete' => '\\NOUTSoap\\StructType\\Delete',
            'DeleteResponse' => '\\NOUTSoap\\StructType\\DeleteResponse',
            'SortType' => '\\NOUTSoap\\StructType\\SortType',
            'SpecialParamListType' => '\\NOUTSoap\\StructType\\SpecialParamListType',
            'Execute' => '\\NOUTSoap\\StructType\\Execute',
            'ExecuteResponse' => '\\NOUTSoap\\StructType\\ExecuteResponse',
            'DrillThrough' => '\\NOUTSoap\\StructType\\DrillThrough',
            'DrillThroughResponse' => '\\NOUTSoap\\StructType\\DrillThroughResponse',
            'ValidateResponse' => '\\NOUTSoap\\StructType\\ValidateResponse',
            'ListeColType' => '\\NOUTSoap\\StructType\\ListeColType',
            'Cancel' => '\\NOUTSoap\\StructType\\Cancel',
            'CancelResponse' => '\\NOUTSoap\\StructType\\CancelResponse',
            'List' => '\\NOUTSoap\\StructType\\_List',
            'ListResponse' => '\\NOUTSoap\\StructType\\ListResponse',
            'GetChart' => '\\NOUTSoap\\StructType\\GetChart',
            'GetChartResponse' => '\\NOUTSoap\\StructType\\GetChartResponse',
            'SelectItems' => '\\NOUTSoap\\StructType\\SelectItems',
            'SelectItemsResponse' => '\\NOUTSoap\\StructType\\SelectItemsResponse',
            'EnterReorderListModeResponse' => '\\NOUTSoap\\StructType\\EnterReorderListModeResponse',
            'ReorderList' => '\\NOUTSoap\\StructType\\ReorderList',
            'ReorderListResponse' => '\\NOUTSoap\\StructType\\ReorderListResponse',
            'SetOrderList' => '\\NOUTSoap\\StructType\\SetOrderList',
            'SetOrderListResponse' => '\\NOUTSoap\\StructType\\SetOrderListResponse',
            'ReorderSubList' => '\\NOUTSoap\\StructType\\ReorderSubList',
            'ReorderSubListResponse' => '\\NOUTSoap\\StructType\\ReorderSubListResponse',
            'SetOrderSubList' => '\\NOUTSoap\\StructType\\SetOrderSubList',
            'SetOrderSubListResponse' => '\\NOUTSoap\\StructType\\SetOrderSubListResponse',
            'CalculationListType' => '\\NOUTSoap\\StructType\\CalculationListType',
            'ColListType' => '\\NOUTSoap\\StructType\\ColListType',
            'GetCalculation' => '\\NOUTSoap\\StructType\\GetCalculation',
            'GetCalculationResponse' => '\\NOUTSoap\\StructType\\GetCalculationResponse',
            'Search' => '\\NOUTSoap\\StructType\\Search',
            'SearchResponse' => '\\NOUTSoap\\StructType\\SearchResponse',
            'Request' => '\\NOUTSoap\\StructType\\Request',
            'RequestResponse' => '\\NOUTSoap\\StructType\\RequestResponse',
            'RequestParam' => '\\NOUTSoap\\StructType\\RequestParam',
            'RequestParamResponse' => '\\NOUTSoap\\StructType\\RequestParamResponse',
            'ExtendedRequest' => '\\NOUTSoap\\StructType\\ExtendedRequest',
            'ExtendedRequestResponse' => '\\NOUTSoap\\StructType\\ExtendedRequestResponse',
            'AutoComplete' => '\\NOUTSoap\\StructType\\AutoComplete',
            'AutoCompleteResponse' => '\\NOUTSoap\\StructType\\AutoCompleteResponse',
            'GetTemporalAutomatismResponse' => '\\NOUTSoap\\StructType\\GetTemporalAutomatismResponse',
            'GetEndAutomatism' => '\\NOUTSoap\\StructType\\GetEndAutomatism',
            'GetEndAutomatismResponse' => '\\NOUTSoap\\StructType\\GetEndAutomatismResponse',
            'GetTableChild' => '\\NOUTSoap\\StructType\\GetTableChild',
            'GetTableChildResponse' => '\\NOUTSoap\\StructType\\GetTableChildResponse',
            'GetContentFolder' => '\\NOUTSoap\\StructType\\GetContentFolder',
            'GetContentFolderResponse' => '\\NOUTSoap\\StructType\\GetContentFolderResponse',
            'GetFolderListResponse' => '\\NOUTSoap\\StructType\\GetFolderListResponse',
            'ModifyFolder' => '\\NOUTSoap\\StructType\\ModifyFolder',
            'ModifyFolderResponse' => '\\NOUTSoap\\StructType\\ModifyFolderResponse',
            'UpdateFolder' => '\\NOUTSoap\\StructType\\UpdateFolder',
            'UpdateFolderResponse' => '\\NOUTSoap\\StructType\\UpdateFolderResponse',
            'CreateFolderResponse' => '\\NOUTSoap\\StructType\\CreateFolderResponse',
            'DeleteFolder' => '\\NOUTSoap\\StructType\\DeleteFolder',
            'ValidateFolder' => '\\NOUTSoap\\StructType\\ValidateFolder',
            'CancelFolder' => '\\NOUTSoap\\StructType\\CancelFolder',
            'CloseFolderList' => '\\NOUTSoap\\StructType\\CloseFolderList',
            'FilterType' => '\\NOUTSoap\\StructType\\FilterType',
            'RequestMessage' => '\\NOUTSoap\\StructType\\RequestMessage',
            'RequestMessageResponse' => '\\NOUTSoap\\StructType\\RequestMessageResponse',
            'GetListMessage' => '\\NOUTSoap\\StructType\\GetListMessage',
            'GetListMessageResponse' => '\\NOUTSoap\\StructType\\GetListMessageResponse',
            'CloseMessageList' => '\\NOUTSoap\\StructType\\CloseMessageList',
            'ModifyMessage' => '\\NOUTSoap\\StructType\\ModifyMessage',
            'ModifyMessageResponse' => '\\NOUTSoap\\StructType\\ModifyMessageResponse',
            'UpdateMessage' => '\\NOUTSoap\\StructType\\UpdateMessage',
            'UpdateMessageResponse' => '\\NOUTSoap\\StructType\\UpdateMessageResponse',
            'CreateMessage' => '\\NOUTSoap\\StructType\\CreateMessage',
            'CreateMessageResponse' => '\\NOUTSoap\\StructType\\CreateMessageResponse',
            'SendMessage' => '\\NOUTSoap\\StructType\\SendMessage',
            'SendMessageResponse' => '\\NOUTSoap\\StructType\\SendMessageResponse',
            'CancelMessage' => '\\NOUTSoap\\StructType\\CancelMessage',
            'GetPJ' => '\\NOUTSoap\\StructType\\GetPJ',
            'GetPJResponseType' => '\\NOUTSoap\\StructType\\GetPJResponseType',
            'GetPJResponse' => '\\NOUTSoap\\StructType\\GetPJResponse',
            'DeletePJ' => '\\NOUTSoap\\StructType\\DeletePJ',
            'DeletePJResponse' => '\\NOUTSoap\\StructType\\DeletePJResponse',
            'DataPJType' => '\\NOUTSoap\\StructType\\DataPJType',
            'AddPJ' => '\\NOUTSoap\\StructType\\AddPJ',
            'AddPJResponse' => '\\NOUTSoap\\StructType\\AddPJResponse',
            'CheckRecipient' => '\\NOUTSoap\\StructType\\CheckRecipient',
            'CheckRecipientResponse' => '\\NOUTSoap\\StructType\\CheckRecipientResponse',
            'ZipPJ' => '\\NOUTSoap\\StructType\\ZipPJ',
            'ZipPJResponse' => '\\NOUTSoap\\StructType\\ZipPJResponse',
            'CheckCreateElement' => '\\NOUTSoap\\StructType\\CheckCreateElement',
            'CheckCreateElementResponse' => '\\NOUTSoap\\StructType\\CheckCreateElementResponse',
            'InitRecordFromMessage' => '\\NOUTSoap\\StructType\\InitRecordFromMessage',
            'InitRecordFromMessageResponse' => '\\NOUTSoap\\StructType\\InitRecordFromMessageResponse',
            'InitRecordFromAddress' => '\\NOUTSoap\\StructType\\InitRecordFromAddress',
            'InitRecordFromAddressResponse' => '\\NOUTSoap\\StructType\\InitRecordFromAddressResponse',
            'LastUnReadType' => '\\NOUTSoap\\StructType\\LastUnReadType',
            'GetMailServiceStatusResponse' => '\\NOUTSoap\\StructType\\GetMailServiceStatusResponse',
            'WithAutomaticResponse' => '\\NOUTSoap\\StructType\\WithAutomaticResponse',
            'WithAutomaticResponseResponse' => '\\NOUTSoap\\StructType\\WithAutomaticResponseResponse',
            'UsernameToken' => '\\NOUTSoap\\StructType\\UsernameToken',
            'OptionDialogue' => '\\NOUTSoap\\StructType\\OptionDialogue',
            'RecipientCheck' => '\\NOUTSoap\\StructType\\RecipientCheck',
            'Action' => '\\NOUTSoap\\StructType\\Action',
            'Form' => '\\NOUTSoap\\StructType\\Form',
            'Element' => '\\NOUTSoap\\StructType\\Element',
            'Filter' => '\\NOUTSoap\\StructType\\Filter',
            'Count' => '\\NOUTSoap\\StructType\\Count',
            'PlanningFilter' => '\\NOUTSoap\\StructType\\PlanningFilter',
            'ValidateError' => '\\NOUTSoap\\StructType\\ValidateError',
            'ConnectedUser' => '\\NOUTSoap\\StructType\\ConnectedUser',
            'ConnectedExtranet' => '\\NOUTSoap\\StructType\\ConnectedExtranet',
        );
    }
}
