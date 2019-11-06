<?php
require_once 'vendor/autoload.php';

use \DiscordWebhooks\Client;
use \DiscordWebhooks\Embed;

$webhooks = new Client('https://discordapp.com/api/webhooks/640536548235935754/nVQAbXIbz_9pQ-kSCAxoOSVzBbqDGpxgCTLP3GYVGZClqL0pGc7EK3W0Q7kOkiaQ9wnB');
$message = new Embed();

$message->description( 
"
```css
Paciente: José Neto
Passaporte: 180
Plano: Basic Life Support - Unique
Periodo: 26/10/2019 a 02/11/2019
Responsavel: Linkin Silva
```
");

$webhooks->username('Bot_Marginal')->message('Plano Criado')->embed($message)->send();
?>