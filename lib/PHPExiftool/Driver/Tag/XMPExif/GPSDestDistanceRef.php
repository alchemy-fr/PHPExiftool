<?php

namespace PHPExiftool\Driver\Tag\XMPExif;

class GPSDestDistanceRef extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'GPSDestDistanceRef';

    protected $Name = 'GPSDestDistanceRef';

    protected $FullName = 'XMP::exif';

    protected $GroupName = 'XMP-exif';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-exif';

    protected $g2 = 'Image';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'GPS Dest Distance Ref';

    protected $local_g2 = 'Location';

    protected $Values = array(
        'K' => array(
            'Id' => 'K',
            'Label' => 'Kilometers',
        ),
        'M' => array(
            'Id' => 'M',
            'Label' => 'Miles',
        ),
        'N' => array(
            'Id' => 'N',
            'Label' => 'Nautical Miles',
        ),
    );

}