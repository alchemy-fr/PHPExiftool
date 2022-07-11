<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Jpeg2000;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ColorSpecApproximation extends AbstractTagGroup
{

  protected string $id = 'Jpeg2000:ColorSpecApproximation';

  protected string $name = 'ColorSpecApproximation';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'Color Spec Approximation',
  ];

  protected int $count = 0;

  protected int $flags = 16;

  protected array $tags = [
    0 => [
      /**
       * table_name : Jpeg2000::ColorSpec
       * line : 154051
       * type : int8s
       * writable : true
       * count : 
       * flags : Unsafe
       */
      'id' => 'Jpeg2000::ColorSpec.Jpeg2000:ColorSpecApproximation',
      'desc' => [
        'en' => 'Color Spec Approximation',
      ],
    ],
  ];

}
