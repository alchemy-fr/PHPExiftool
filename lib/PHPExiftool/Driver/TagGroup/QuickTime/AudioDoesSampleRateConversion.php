<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\QuickTime;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AudioDoesSampleRateConversion extends AbstractTagGroup
{

  protected string $id = 'QuickTime:AudioDoesSampleRateConversion';

  protected string $name = 'AudioDoesSampleRateConversion';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Audio Does Sample Rate Conversion',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : QuickTime::EncodingParams
       * line : 313001
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'QuickTime::EncodingParams.QuickTime:AudioDoesSampleRateConversion',
      'desc' => [
        'en' => 'Audio Does Sample Rate Conversion',
      ],
    ],
  ];

}
