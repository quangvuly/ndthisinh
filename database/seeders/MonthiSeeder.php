<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class MonthiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->insert([
            'name' => 'Cisco Certified Network Associate (CCNA)',
            'descript' => 'Chứng chỉ CCNA là chứng chỉ nghề nghiệp độc quyền của Cisco phát hành nhằm công nhận học viên/kĩ sư đủ trình độ và năng lực về Quản trị hệ thống mạng máy tính cơ bản.',
            'location' => 'Phòng 201',
            'time_exam' => '2022-06-18',
            'total' => '20',
        ]);

        DB::table('subjects')->insert([
            'name' => 'Cisco Certified Network Professional (CCNP)',
            'descript' => 'Chứng chỉ Cisco Certified Network Professional (CCNP) là chứng nhận kiến thức và kỹ năng cần thiết để cài đặt, cấu hình và khắc phục sự cố của hệ thống mạng hội tụ nội bộ và mạng diện rộng với số lượng thiết bị đầu cuối từ 100-500 hoặc nhiều hơn.',
            'location' => 'Phòng 202',
            'time_exam' => '2022-06-19',
            'total' => '20',
        ]);

        DB::table('subjects')->insert([
            'name' => 'Microsoft Certified: Azure Fundamentals (AZ-900)',
            'descript' => 'AZ-900 là chứng chỉ của Microsoft về các khái niệm Cloud và các dịch vụ của Azure.',
            'location' => 'Phòng 301',
            'time_exam' => '2022-07-10',
            'total' => '15',
        ]);

        DB::table('subjects')->insert([
            'name' => 'Microsoft Diploma',
            'descript' => 'Chứng chỉ Microsoft giúp chứng minh khả năng cũng như mức độ hiểu biết của từng các nhân đối với công nghệ Microsoft, đồng thời phản ánh được từng vai trò công việc và trách nhiệm cụ thể của cá nhân đó thông qua chứng chỉ mà họ đạt được.',
            'location' => 'Phòng 101',
            'time_exam' => '2022-08-10',
            'total' => '50',
        ]);

        DB::table('subjects')->insert([
            'name' => 'Microsoft Certified Azure Developer Associate AZ-203',
            'descript' => 'Khóa học Microsoft Certified Azure Developer Associate (AZ-203) là phù hợp nhất với phiên bản 2018 của chứng chỉ Azure Developer Associate, là sự kết hợp giữa AZ-200 và AZ-201 do Microsoft công bố.',
            'location' => 'Phòng 302',
            'time_exam' => '2022-07-20',
            'total' => '15',
        ]);

        DB::table('subjects')->insert([
            'name' => 'AWS Certification',
            'descript' => 'AWS Certification là bộ chứng chỉ được câp bởi Amazon đánh giá mức độ hiểu biết về Cloud (điện toán đám mây), cụ thể là các dịch vụ của Amazon Web Services',
            'location' => 'Phòng 501',
            'time_exam' => '2022-07-12',
            'total' => '30',
        ]);

        DB::table('subjects')->insert([
            'name' => 'VCDX (VMware Certified Design Expert)',
            'descript' => 'Các chứng chỉ của VMware được phân loại ở nhiều cấp độ khác nhau dành cho những chuyên gia CNTT ở các trình độ kiến thức khác nhau, bao gồm: VCDX (VMware Certified Design Expert), VCAP (VMware Certified Advanced Professional) và VCP (VMware Certified Professional), và cấp độ mới được VMware giới thiệu - VCA (VMware Certified Associate).',
            'location' => 'Phòng 602',
            'time_exam' => '2022-08-20',
            'total' => '20',
        ]);

        DB::table('subjects')->insert([
            'name' => 'VCAP (VMware Certified Advanced Professional)',
            'descript' => 'Các chứng chỉ của VMware được phân loại ở nhiều cấp độ khác nhau dành cho những chuyên gia CNTT ở các trình độ kiến thức khác nhau, bao gồm: VCDX (VMware Certified Design Expert), VCAP (VMware Certified Advanced Professional) và VCP (VMware Certified Professional), và cấp độ mới được VMware giới thiệu - VCA (VMware Certified Associate).',
            'location' => 'Phòng 603',
            'time_exam' => '2022-08-21',
            'total' => '20',
        ]);

        DB::table('subjects')->insert([
            'name' => 'VCP (VMware Certified Professional)',
            'descript' => 'Các chứng chỉ của VMware được phân loại ở nhiều cấp độ khác nhau dành cho những chuyên gia CNTT ở các trình độ kiến thức khác nhau, bao gồm: VCDX (VMware Certified Design Expert), VCAP (VMware Certified Advanced Professional) và VCP (VMware Certified Professional), và cấp độ mới được VMware giới thiệu - VCA (VMware Certified Associate).',
            'location' => 'Phòng 604',
            'time_exam' => '2022-08-22',
            'total' => '20',
        ]);


    }
}
