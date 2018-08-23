<?php

use Illuminate\Database\Seeder;

class DataRowsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_rows')->delete();
        
        \DB::table('data_rows')->insert(array (
            0 => 
            array (
                'id' => 1,
                'data_type_id' => 1,
                'field' => 'id',
                'type' => 'number',
                'display_name' => 'ID',
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '',
                'order' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'data_type_id' => 1,
                'field' => 'name',
                'type' => 'text',
                'display_name' => '名称',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
                'order' => 2,
            ),
            2 => 
            array (
                'id' => 3,
                'data_type_id' => 1,
                'field' => 'email',
                'type' => 'text',
                'display_name' => 'Email',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
                'order' => 3,
            ),
            3 => 
            array (
                'id' => 4,
                'data_type_id' => 1,
                'field' => 'password',
                'type' => 'password',
                'display_name' => '密码',
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 1,
                'add' => 1,
                'delete' => 0,
                'details' => '',
                'order' => 4,
            ),
            4 => 
            array (
                'id' => 5,
                'data_type_id' => 1,
                'field' => 'remember_token',
                'type' => 'text',
                'display_name' => 'Remember Token',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '',
                'order' => 5,
            ),
            5 => 
            array (
                'id' => 6,
                'data_type_id' => 1,
                'field' => 'created_at',
                'type' => 'timestamp',
                'display_name' => '创建于',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '',
                'order' => 6,
            ),
            6 => 
            array (
                'id' => 7,
                'data_type_id' => 1,
                'field' => 'updated_at',
                'type' => 'timestamp',
                'display_name' => '创建于',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '',
                'order' => 7,
            ),
            7 => 
            array (
                'id' => 8,
                'data_type_id' => 1,
                'field' => 'avatar',
                'type' => 'image',
                'display_name' => '头像',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
                'order' => 8,
            ),
            8 => 
            array (
                'id' => 9,
                'data_type_id' => 1,
                'field' => 'user_belongsto_role_relationship',
                'type' => 'relationship',
                'display_name' => '角色',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 0,
                'details' => '{"model":"TCG\\\\Voyager\\\\Models\\\\Role","table":"roles","type":"belongsTo","column":"role_id","key":"id","label":"display_name","pivot_table":"roles","pivot":"0"}',
                'order' => 10,
            ),
            9 => 
            array (
                'id' => 10,
                'data_type_id' => 1,
                'field' => 'user_belongstomany_role_relationship',
                'type' => 'relationship',
                'display_name' => 'Roles',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 0,
                'details' => '{"model":"TCG\\\\Voyager\\\\Models\\\\Role","table":"roles","type":"belongsToMany","column":"id","key":"id","label":"display_name","pivot_table":"user_roles","pivot":"1","taggable":"0"}',
                'order' => 11,
            ),
            10 => 
            array (
                'id' => 11,
                'data_type_id' => 1,
                'field' => 'locale',
                'type' => 'text',
                'display_name' => 'Locale',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 0,
                'details' => '',
                'order' => 12,
            ),
            11 => 
            array (
                'id' => 12,
                'data_type_id' => 1,
                'field' => 'settings',
                'type' => 'hidden',
                'display_name' => 'Settings',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '',
                'order' => 12,
            ),
            12 => 
            array (
                'id' => 13,
                'data_type_id' => 2,
                'field' => 'id',
                'type' => 'number',
                'display_name' => 'ID',
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '',
                'order' => 1,
            ),
            13 => 
            array (
                'id' => 14,
                'data_type_id' => 2,
                'field' => 'name',
                'type' => 'text',
                'display_name' => '名称',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
                'order' => 2,
            ),
            14 => 
            array (
                'id' => 15,
                'data_type_id' => 2,
                'field' => 'created_at',
                'type' => 'timestamp',
                'display_name' => '创建于',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '',
                'order' => 3,
            ),
            15 => 
            array (
                'id' => 16,
                'data_type_id' => 2,
                'field' => 'updated_at',
                'type' => 'timestamp',
                'display_name' => '创建于',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '',
                'order' => 4,
            ),
            16 => 
            array (
                'id' => 17,
                'data_type_id' => 3,
                'field' => 'id',
                'type' => 'number',
                'display_name' => 'ID',
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '',
                'order' => 1,
            ),
            17 => 
            array (
                'id' => 18,
                'data_type_id' => 3,
                'field' => 'name',
                'type' => 'text',
                'display_name' => '名称',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
                'order' => 2,
            ),
            18 => 
            array (
                'id' => 19,
                'data_type_id' => 3,
                'field' => 'created_at',
                'type' => 'timestamp',
                'display_name' => '创建于',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '',
                'order' => 3,
            ),
            19 => 
            array (
                'id' => 20,
                'data_type_id' => 3,
                'field' => 'updated_at',
                'type' => 'timestamp',
                'display_name' => '创建于',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '',
                'order' => 4,
            ),
            20 => 
            array (
                'id' => 21,
                'data_type_id' => 3,
                'field' => 'display_name',
                'type' => 'text',
                'display_name' => '显示名称',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
                'order' => 5,
            ),
            21 => 
            array (
                'id' => 22,
                'data_type_id' => 1,
                'field' => 'role_id',
                'type' => 'text',
                'display_name' => '角色',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '',
                'order' => 9,
            ),
            22 => 
            array (
                'id' => 23,
                'data_type_id' => 5,
                'field' => 'id',
                'type' => 'text',
                'display_name' => 'Id',
                'required' => 1,
                'browse' => 0,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => NULL,
                'order' => 1,
            ),
            23 => 
            array (
                'id' => 24,
                'data_type_id' => 5,
                'field' => 'course_id',
                'type' => 'text',
                'display_name' => 'Course Id',
                'required' => 1,
                'browse' => 0,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => NULL,
                'order' => 3,
            ),
            24 => 
            array (
                'id' => 25,
                'data_type_id' => 5,
                'field' => 'name',
                'type' => 'text',
                'display_name' => '课 程',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => NULL,
                'order' => 4,
            ),
            25 => 
            array (
                'id' => 26,
                'data_type_id' => 5,
                'field' => 'intro',
                'type' => 'text',
                'display_name' => '介绍',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => NULL,
                'order' => 7,
            ),
            26 => 
            array (
                'id' => 27,
                'data_type_id' => 5,
                'field' => 'pic',
                'type' => 'image',
                'display_name' => '封面',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => NULL,
                'order' => 5,
            ),
            27 => 
            array (
                'id' => 28,
                'data_type_id' => 5,
                'field' => 'teacher',
                'type' => 'text',
                'display_name' => '授课教师',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => NULL,
                'order' => 6,
            ),
            28 => 
            array (
                'id' => 29,
                'data_type_id' => 5,
                'field' => 'teacher_id',
                'type' => 'text',
                'display_name' => 'Teacher Id',
                'required' => 1,
                'browse' => 0,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => NULL,
                'order' => 2,
            ),
            29 => 
            array (
                'id' => 30,
                'data_type_id' => 5,
                'field' => 'created_at',
                'type' => 'timestamp',
                'display_name' => 'Created At',
                'required' => 0,
                'browse' => 0,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => NULL,
                'order' => 8,
            ),
            30 => 
            array (
                'id' => 31,
                'data_type_id' => 5,
                'field' => 'updated_at',
                'type' => 'timestamp',
                'display_name' => 'Updated At',
                'required' => 0,
                'browse' => 0,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => NULL,
                'order' => 9,
            ),
            31 => 
            array (
                'id' => 37,
                'data_type_id' => 7,
                'field' => 'id',
                'type' => 'text',
                'display_name' => 'Id',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => NULL,
                'order' => 1,
            ),
            32 => 
            array (
                'id' => 38,
                'data_type_id' => 7,
                'field' => 'course_id',
                'type' => 'text',
                'display_name' => 'Course Id',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => NULL,
                'order' => 2,
            ),
            33 => 
            array (
                'id' => 39,
                'data_type_id' => 7,
                'field' => 'data',
                'type' => 'text',
                'display_name' => 'Data',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => NULL,
                'order' => 3,
            ),
            34 => 
            array (
                'id' => 40,
                'data_type_id' => 7,
                'field' => 'created_at',
                'type' => 'timestamp',
                'display_name' => 'Created At',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => NULL,
                'order' => 4,
            ),
            35 => 
            array (
                'id' => 41,
                'data_type_id' => 7,
                'field' => 'updated_at',
                'type' => 'timestamp',
                'display_name' => 'Updated At',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => NULL,
                'order' => 5,
            ),
            36 => 
            array (
                'id' => 42,
                'data_type_id' => 8,
                'field' => 'id',
                'type' => 'text',
                'display_name' => '编号',
                'required' => 1,
                'browse' => 0,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 1,
                'details' => NULL,
                'order' => 1,
            ),
            37 => 
            array (
                'id' => 43,
                'data_type_id' => 8,
                'field' => 'course_id',
                'type' => 'text',
                'display_name' => '所属课程 ID',
                'required' => 1,
                'browse' => 0,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => NULL,
                'order' => 3,
            ),
            38 => 
            array (
                'id' => 44,
                'data_type_id' => 8,
                'field' => 'creater_id',
                'type' => 'text',
                'display_name' => '创建者 ID',
                'required' => 1,
                'browse' => 0,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => NULL,
                'order' => 7,
            ),
            39 => 
            array (
                'id' => 45,
                'data_type_id' => 8,
                'field' => 'title',
                'type' => 'text',
                'display_name' => '问卷名',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 1,
                'details' => NULL,
                'order' => 2,
            ),
            40 => 
            array (
                'id' => 46,
                'data_type_id' => 8,
                'field' => 'desc',
                'type' => 'text_area',
                'display_name' => '问卷简介',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 1,
                'details' => NULL,
                'order' => 4,
            ),
            41 => 
            array (
                'id' => 47,
                'data_type_id' => 8,
                'field' => 'created_at',
                'type' => 'timestamp',
                'display_name' => '创建时间',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 1,
                'details' => NULL,
                'order' => 9,
            ),
            42 => 
            array (
                'id' => 48,
                'data_type_id' => 8,
                'field' => 'updated_at',
                'type' => 'timestamp',
                'display_name' => '上次更新时间',
                'required' => 0,
                'browse' => 0,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 1,
                'details' => NULL,
                'order' => 10,
            ),
            43 => 
            array (
                'id' => 51,
                'data_type_id' => 8,
                'field' => 'questions',
                'type' => 'text',
                'display_name' => 'Questions',
                'required' => 1,
                'browse' => 0,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 1,
                'details' => NULL,
                'order' => 8,
            ),
            44 => 
            array (
                'id' => 54,
                'data_type_id' => 8,
                'field' => 'creater',
                'type' => 'text',
                'display_name' => '创建者',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 1,
                'details' => NULL,
                'order' => 6,
            ),
            45 => 
            array (
                'id' => 55,
                'data_type_id' => 8,
                'field' => 'course',
                'type' => 'text',
                'display_name' => '所属课程',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 1,
                'details' => NULL,
                'order' => 5,
            ),
            46 => 
            array (
                'id' => 56,
                'data_type_id' => 10,
                'field' => 'id',
                'type' => 'text',
                'display_name' => 'Id',
                'required' => 1,
                'browse' => 0,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 1,
                'details' => NULL,
                'order' => 1,
            ),
            47 => 
            array (
                'id' => 57,
                'data_type_id' => 10,
                'field' => 'id',
                'type' => 'text',
                'display_name' => 'User Id',
                'required' => 1,
                'browse' => 0,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 1,
                'details' => NULL,
                'order' => 2,
            ),
            48 => 
            array (
                'id' => 58,
                'data_type_id' => 10,
                'field' => 'survey_id',
                'type' => 'text',
                'display_name' => 'Survey Id',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 1,
                'details' => NULL,
                'order' => 4,
            ),
            49 => 
            array (
                'id' => 59,
                'data_type_id' => 10,
                'field' => 'tags',
                'type' => 'text',
                'display_name' => 'Tags',
                'required' => 1,
                'browse' => 0,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 1,
                'details' => NULL,
                'order' => 5,
            ),
            50 => 
            array (
                'id' => 60,
                'data_type_id' => 10,
                'field' => 'created_at',
                'type' => 'timestamp',
                'display_name' => '首次填写时间',
                'required' => 0,
                'browse' => 0,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 1,
                'details' => NULL,
                'order' => 6,
            ),
            51 => 
            array (
                'id' => 61,
                'data_type_id' => 10,
                'field' => 'updated_at',
                'type' => 'timestamp',
                'display_name' => '填写时间',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => NULL,
                'order' => 9,
            ),
            52 => 
            array (
                'id' => 63,
                'data_type_id' => 10,
                'field' => 'answer_record_belongsto_user_relationship',
                'type' => 'relationship',
                'display_name' => '填写者',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 1,
                'details' => '{"model":"App\\\\User","table":"users","type":"belongsTo","column":"user_primary_id","key":"id","label":"name","pivot_table":"answer_records","pivot":"0","taggable":"0"}',
                'order' => 8,
            ),
            53 => 
            array (
                'id' => 64,
                'data_type_id' => 10,
                'field' => 'user_primary_id',
                'type' => 'text',
                'display_name' => 'User Primary Id',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 1,
                'details' => NULL,
                'order' => 3,
            ),
            54 => 
            array (
                'id' => 65,
                'data_type_id' => 10,
                'field' => 'answer_record_belongsto_survey_relationship',
                'type' => 'relationship',
                'display_name' => '问卷名',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 1,
                'details' => '{"model":"App\\\\Models\\\\DB\\\\Survey","table":"surveys","type":"belongsTo","column":"survey_id","key":"id","label":"title","pivot_table":"answer_records","pivot":"0","taggable":"0"}',
                'order' => 7,
            ),
            55 => 
            array (
                'id' => 66,
                'data_type_id' => 8,
                'field' => 'deleted_at',
                'type' => 'timestamp',
                'display_name' => 'Deleted At',
                'required' => 0,
                'browse' => 0,
                'read' => 1,
                'edit' => 0,
                'add' => 0,
                'delete' => 1,
                'details' => NULL,
                'order' => 11,
            ),
        ));
        
        
    }
}