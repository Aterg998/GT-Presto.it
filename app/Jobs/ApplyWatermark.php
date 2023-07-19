<?php

namespace App\Jobs;

use App\Models\Image;
use Spatie\Image\Image as SpatieImage;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Spatie\Image\Manipulations;

class ApplyWatermark implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $ad_image_id;


    public function __construct($ad_image_id)
    {
        $this->ad_image_id = $ad_image_id;
    }

    public function handle(): void
    {
        $i = Image::find($this->ad_image_id);
        if (!$i) {
            return;
        }

        $srcPath = storage_path('app/public/' . $i->path);
        $image = file_get_contents($srcPath);

        $image = SpatieImage::load($srcPath);

        putenv('GOOGLE_APPLICATION_CREDENTIALS=' . base_path('google_credential.json'));

        $image->watermark(base_path('resources/img/watermark.png'))
            ->watermarkOpacity(50)
            ->watermarkPadding(5, 5, Manipulations::UNIT_PERCENT)
            ->watermarkWidth(30, Manipulations::UNIT_PERCENT);

        $image->save();
    }
}
