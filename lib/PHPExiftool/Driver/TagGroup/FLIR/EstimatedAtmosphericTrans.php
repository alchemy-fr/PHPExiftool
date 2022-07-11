<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FLIR;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class EstimatedAtmosphericTrans extends AbstractTagGroup
{

  protected string $id = 'FLIR:EstimatedAtmosphericTrans';

  protected string $name = 'EstimatedAtmosphericTrans';

  protected ?string $phpType = 'float';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Estimated Atmospheric Trans',
  ];

  protected int $count = 0;

  protected array $tags = [
    0 => [
      /**
       * table_name : FLIR::FPF
       * line : 122951
       * type : float
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'FLIR::FPF.FLIR:EstimatedAtmosphericTrans',
      'desc' => [
        'en' => 'Estimated Atmospheric Trans',
      ],
    ],
    1 => [
      /**
       * table_name : FLIR::Params
       * line : 123932
       * type : float
       * writable : false
       * count : 
       * flags : Permanent
       */
      'id' => 'FLIR::Params.FLIR:EstimatedAtmosphericTrans',
      'desc' => [
        'en' => 'Estimated Atmospheric Trans',
      ],
    ],
  ];

}
