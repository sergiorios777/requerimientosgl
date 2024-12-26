<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CrearTablaAreasUsuarias extends Migration
{
    public function up()
    {
        // crea la tabla 'areasUsuarias'
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'areaUsuaria' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'unidadOrganicaId' => [
                'type'       => 'INT',
                'constraint' => 5,
                'unsigned'   => true,
                'null'       => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('areasUsuarias');
    }

    public function down()
    {
        // elimina la tabla 'areasUsuarias'
        $this->forge->dropTable('areasUsuarias');
    }
}
