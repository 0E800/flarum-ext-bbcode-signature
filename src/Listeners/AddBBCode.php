<?php
namespace oe800\BBCodeSig\Listeners;
use Flarum\Event\ConfigureFormatter;
use Illuminate\Contracts\Events\Dispatcher;
class AddBBCode
{
    public function subscribe(Dispatcher $events)
    {
        $events->listen(ConfigureFormatter::class, [$this, 'addBBCode']);
    }
    public function addBBCode(ConfigureFormatter $event)
    {


	 $event->configurator->BBCodes->addCustom(
            '[SIG]{URL},{URL2},{TEXT},{TEXT2}[/SIG]',
            '<div class="Sighover"><a class="tile2" href="{URL}"><img src="{URL2}">
    <div class="details"><span class="title">{TEXT}</span><span class="info">{TEXT2}</span></div></a>'
        );


 	$event->configurator->BBCodes->addCustom(
            '[SIG2]{URL},{TEXT},{URL2},{TEXT2},{URL3},{TEXT3}[/SIG2]',
            '<figure class="snip0013"><img src="{URL}" alt="{TEXT}"/><div><a href="{URL2}" style="text-decoration: none"><i class="ion-social-{TEXT2}-outline left-icon"></i></a><a href="{URL3}" style="text-decoration: none"><i class="ion-social-{TEXT3}-outline right-icon"></i></a></div></figure>'
        );

$event->configurator->BBCodes->addCustom(
            '[IMGTILE]{URL},{TEXT},{TEXT2},{TEXT3}[/IMGTILE]',
            '<div class="wrap"><div class="Supertiles"><img src="{URL}"><div class="text" style=color:><h1>{TEXT}</h1><h2 class="animate-text">{TEXT2}</h2><p class="animate-text">{TEXT3}</p></div></div>'
        );

$event->configurator->BBCodes->addCustom(
            '[IMGTILE2]{URL},{COLOR},{COLOR2},{TEXT},{TEXT2},{TEXT3}[/IMGTILE2]',
            '<div class="wrap"><div class="Supertiles" style="background-color: {COLOR}"><img src="{URL}"><div class="text" style="color: {COLOR2}"><h1>{TEXT}</h1><h2 class="animate-text">{TEXT2}</h2><p class="animate-text">{TEXT3}</p></div></div>'
        );


$event->configurator->BBCodes->addCustom(
            '[IMGTILE3]{URL},{TEXT},{TEXT2}[/IMGTILE3]',
            '<figure class="snip1567"><img src="{URL}"><figcaption><h3>{TEXT}</h3><p>{TEXT2}</p></figcaption>'
        );

$event->configurator->BBCodes->addCustom(
            '[IMGTILE4]{URL},{TEXT},{TEXT2},{URL2}[/IMGTILE4]',
            '<figure class="snip1552"><img src="{URL}"><figcaption><h3>{TEXT}</h3><p>{TEXT2}</p></figcaption><a href="{URL2}"></a></figure>'
        );

$event->configurator->BBCodes->addCustom(
            '[IMGTILE5]{URL},{URL2},{TEXT},{URL3},{TEXT2},{URL4},{TEXT3}[/IMGTILE5]',
            '<figure class="snip1550"><img src="{URL}"><div class="icons"><a href="{URL2}"><i class="ion-{TEXT}"></i></a><a  href="{URL3}"><i class="ion-{TEXT2}"></i></a><a  href="{URL4}"><i class="ion-{TEXT3}"></i></a></div></figure>'
        );


    }
}
