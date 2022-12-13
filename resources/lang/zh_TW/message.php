<?php

return [

    'index' => [
        'page_title' => '私信列表',
    ],
    'show' => [
        'page_title' => '私信詳情',
    ],
    'field_value_change_message_body' => ':field 被管理員 :operator 從 :old 改為 :new。理由：:reason。',
    'field_value_change_message_subject' => ':field 改變',
    'download_disable' => [
        'subject' => '下載權限取消',
        'body' => '你的下載權限被取消，可能的原因是過低的分享率或行為不當。By: :operator',
    ],
    'download_disable_upload_over_speed' => [
        'subject' => '下載權限取消',
        'body' => '你因上傳速度過快下載權限被取消，若是盒子用戶請備案。',
    ],
    'download_enable' => [
        'subject' => '下載權限恢復',
        'body' => '你的下載權限恢復，你現在可以下載種子。By: :operator',
    ],
    'temporary_invite_change' => [
        'subject' => '臨時邀請:change_type',
        'body' => '你的臨時邀請被管理員 :operator :change_type :count 個，理由：:reason。',
    ],
];
