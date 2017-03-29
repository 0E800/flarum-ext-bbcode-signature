<?php
namespace ClarkWinkelmann\ComicSans\Listeners;
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
            '<div class="SignatureWrapper"><p style="text-align: center;"></p><a class="tile" href="{URL}"><img src="{URL2}">
    <div class="details"><span class="title">{TEXT}</span><span class="info">{TEXT2}</span></div></a></div>'
        );
    }
}
