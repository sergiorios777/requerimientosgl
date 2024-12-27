<?php

declare(strict_types=1);

/**
 * This file is part of CodeIgniter Shield.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Config;

use CodeIgniter\Shield\Config\AuthGroups as ShieldAuthGroups;

class AuthGroups extends ShieldAuthGroups
{
    /**
     * --------------------------------------------------------------------
     * Default Group
     * --------------------------------------------------------------------
     * The group that a newly registered user is added to.
     */
    public string $defaultGroup = 'user';

    /**
     * --------------------------------------------------------------------
     * Groups
     * --------------------------------------------------------------------
     * An associative array of the available groups in the system, where the keys
     * are the group names and the values are arrays of the group info.
     *
     * Whatever value you assign as the key will be used to refer to the group
     * when using functions such as:
     *      $user->addGroup('superadmin');
     *
     * @var array<string, array<string, string>>
     *
     * @see https://codeigniter4.github.io/shield/quick_start_guide/using_authorization/#change-available-groups for more info
     */
    public array $groups = [
        'superadmin' => [
            'title'       => 'Super Admin',
            'description' => 'Complete control of the site.',
        ],
        'admin' => [
            'title'       => 'Admin',
            'description' => 'Day to day administrators of the site.',
        ],
        'developer' => [
            'title'       => 'Developer',
            'description' => 'Site programmers.',
        ],
        'user' => [
            'title'       => 'User',
            'description' => 'Encargado de las áreas usuarias municipales que registran los requerimientos.',
        ],
        'logistic' => [
            'title'       => 'Logística',
            'description' => 'Encargado del área de abasteciento, gestiona los costos y afectación presupuestal para el compromiso de las órdenes de compra y de servicio.',
        ],
        'oga' => [
            'title'       => 'OGA',
            'description' => 'Resopnsable de autorizar la determinación del costo, ejecución del requerimiento y programación del pago.',
        ],
        'beta' => [
            'title'       => 'Beta User',
            'description' => 'Has access to beta-level features.',
        ],
    ];

    /**
     * --------------------------------------------------------------------
     * Permissions
     * --------------------------------------------------------------------
     * The available permissions in the system.
     *
     * If a permission is not listed here it cannot be used.
     */
    public array $permissions = [
        'admin.access'        => 'Can access the sites admin area',
        'admin.settings'      => 'Can access the main site settings',
        'users.manage-admins' => 'Can manage other admins',
        'users.create'        => 'Can create new non-admin users',
        'users.edit'          => 'Can edit existing non-admin users',
        'users.delete'        => 'Can delete existing non-admin users',
        'requiriments.create' => 'Can create new requiriment',
        'requiriments.edit'   => 'Can edit existing requiriment',
        'requiriments.delete' => 'Can delete existing requiriment',
        'requiriments.authorize' => 'Can authorize the cost determination of a requiriment',
        'encode.create'       => 'Can create new item encode from requiriment',
        'encode.edit'         => 'Can edit existing item encode from requiriment',
        'encode.delete'       => 'Can delete existing item encode from requiriment',
        'pricing.create'      => 'Can create new item price comparison char',
        'pricing.edit'        => 'Can edit existing item price comparison char',
        'pricing.delete'      => 'Can delete existing item price comparison char',
        'pricing.authorize'   => 'Can authorize the preparation of the corresponding orden',
        'order.create'        => 'Can create new order info register ',
        'order.edit'          => 'Can edit exiting order info register ',
        'order.delete'        => 'Can deelte exiting order info register ',
        'beta.access'         => 'Can access beta-level features',
    ];

    /**
     * --------------------------------------------------------------------
     * Permissions Matrix
     * --------------------------------------------------------------------
     * Maps permissions to groups.
     *
     * This defines group-level permissions.
     */
    public array $matrix = [
        'superadmin' => [
            'admin.*',
            'users.*',
            'beta.*',
            'requiriments.*',
            'encode.*',
            'pricing.*',
        ],
        'admin' => [
            'admin.access',
            'users.create',
            'users.edit',
            'users.delete',
            'requiriments.create',
            'requiriments.edit',
            'requiriments.delete',
            'encode.create',
            'encode.edit',
            'encode.delete',
            'pricing.create',
            'pricing.edit',
            'pricing.delete',
            'beta.access',
        ],
        'developer' => [
            'admin.access',
            'admin.settings',
            'users.create',
            'users.edit',
            'requiriments.create',
            'requiriments.edit',
            'encode.create',
            'encode.edit',
            'pricing.create',
            'pricing.edit',
            'beta.access',
        ],
        'user' => [
            'requiriments.create',
            'requiriments.edit',
            'requiriments.delete',
        ],
        'logistic' => [
            'requiriments.create',
            'requiriments.edit',
            'requiriments.delete',
            'encode.create',
            'encode.edit',
            'encode.delete',
            'pricing.create',
            'pricing.edit',
            'pricing.delete',
            'order.*',
        ],
        'oga' => [
            'requeriments.*',
            'encode.*',
            'pricing.authorize',
            'order.*',
        ],
        'beta' => [
            'beta.access',
        ],
    ];
}
