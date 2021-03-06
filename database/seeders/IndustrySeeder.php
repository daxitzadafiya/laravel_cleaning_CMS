<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IndustrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $classes = [
            [
                'parent_id' => null,
                'code' => 'agriculture_forestry_fisheries_ore',
                'name' => '農林水産業/鉱業',
            ],
            [
                'parent_id' => null,
                'code' => 'construction',
                'name' => '建設',
            ],
            [
                'parent_id' => null,
                'code' => 'manufacturing_processing',
                'name' => '製造/加工',
            ],
            [
                'parent_id' => null,
                'code' => 'it',
                'name' => 'IT',
            ],
            [
                'parent_id' => null,
                'code' => 'transportation_logistics',
                'name' => '運輸/物流',
            ],
            [
                'parent_id' => null,
                'code' => 'retail_wholesale',
                'name' => '小売/卸売',
            ],
            [
                'parent_id' => null,
                'code' => 'finance_insurance',
                'name' => '金融/保険',
            ],
            [
                'parent_id' => null,
                'code' => 'real_estate_rental',
                'name' => '不動産/レンタル',
            ],
            [
                'parent_id' => null,
                'code' => 'profession',
                'name' => '士業/学術/専門技術サービス',
            ],
            [
                'parent_id' => null,
                'code' => 'design_production',
                'name' => 'デザイン/制作',
            ],
            [
                'parent_id' => null,
                'code' => 'food',
                'name' => '飲食',
            ],
            [
                'parent_id' => null,
                'code' => 'leisure_entertainment',
                'name' => 'レジャー/娯楽',
            ],
            [
                'parent_id' => null,
                'code' => 'lifestyle',
                'name' => '生活関連サービス',
            ],
            [
                'parent_id' => null,
                'code' => 'education',
                'name' => '教育/学習支援',
            ],
            [
                'parent_id' => null,
                'code' => 'medical_welfare',
                'name' => '医療/福祉',
            ],
            [
                'parent_id' => null,
                'code' => 'other_services',
                'name' => 'その他サービス',
            ],
            [
                'parent_id' => null,
                'code' => 'other_association',
                'name' => 'NPO、一般社団法人等',
            ],
            [
                'parent_id' => null,
                'code' => 'other',
                'name' => 'その他',
            ],
        ];

        foreach ($classes as $class) {
            DB::table('industries')->insert([
                'parent_id' => $class['parent_id'],
                'code' => $class['code'],
                'name' => $class['name'],
            ]);
        }

        $codesJson = '{"agriculture_forestry_fisheries_ore":{"agriculture":"農業","forestry":"林業","fishing_industry":"漁業、水産養殖業","mining":"鉱業、採石業、砂利採取業"},"construction":{"civil_contractors":"土木工事業","pavement":"舗装工事業","carpenter":"とび、大工、左官等の建設工事業","renovation":"リフォーム工事業","electrical_plumbing":"電気、管工事等の設備工事業"},"manufacturing_processing":{"grocery":"食料品の製造加工業","machinery_manufacturing":"機械器具の製造加工業","printing":"印刷業","other_manufacturing":"その他の製造加工業"},"it":{"software_development":"受託：ソフトウェア、アプリ開発業","system_development":"受託：システム開発業","survey_analysis":"受託：調査、分析等の情報処理業","server_management":"受託：サーバー運営管理","website_production":"受託：ウェブサイト制作","online_service_management":"オンラインサービス運営業","online_advertising_agency":"オンライン広告代理店業","online_advertising_planning_production":"オンライン広告企画・制作業","online_media_management":"オンラインメディア運営業","portal_site_management":"ポータルサイト運営業","other_it_services":"その他、IT サービス業"},"transportation_logistics":{"transport_delivery":"輸送業、配送業","delivery":"バイク便等の配達業","other_transportation_logistics":"その他の運輸業、物流業"},"retail_wholesale":{"other_wholesale":"卸売業：その他","clothing_wholesale_fiber":"卸売業：衣類卸売／繊維","food_wholesale":"卸売業：飲食料品","entrusted_development_wholesale":"卸売業：機械器具","online_shop":"小売業：無店舗　オンラインショップ","fashion_grocery_store":"小売業：店舗あり　ファッション、雑貨","food_store":"小売業：店舗あり　生鮮食品、飲食料品","entrusted_store":"小売業：店舗あり　機械、器具","other_store":"小売業：店舗あり　その他"},"finance_insurance":{"financial_instruments_exchange":"金融業：金融商品取引","commodity_futures_investment_advisor":"金融業：商品先物取引、商品投資顧問","other_financial":"金融業：その他","brokerage_insurance":"保険業：仲介、代理","other_insurance":"保険業：その他"},"real_estate_rental":{"real_estate_developer":"不動産業：ディベロッパー","real_estate_brokerage":"不動産業：売買、仲介","rent_coin_parking_management":"不動産業：賃貸、コインパーキング、管理","rental_office_co_working_space":"不動産業：レンタルオフィス、コワーキングスペース","rental_lease":"レンタル業、リース業"},"profession":{"cpa_tax_accountant":"士業：公認会計士事務所、税理士事務所","law_office":"士業：法律事務所","judicial_and_administrative_scrivener":"士業：司法書士事務所／行政書士事務所","labor_consultant":"士業：社会保険労務士事務所","other_profession":"士業：その他","business_consultant":"経営コンサルタント","academic_research_development":"学術・開発研究機関","advertising_agency":"広告代理店","advertising_planning_production":"広告企画／制作"},"design_production":{"design_development":"ソフトウェア、アプリ開発業（受託）","apparel_industry_design":"服飾デザイン業、工業デザイン業","website_design":"ウェブサイト制作（受託）","advertising_planning_design":"広告企画／制作業","other_design":"その他、デザイン／制作"},"food":{"restaurants_coffee_shops":"レストラン、喫茶店等の飲食店業","sale_of_lunch":"弁当の販売業","bread_confectionery_manufacture_sale":"パン、菓子等の製造販売業","delivery_catering_mobile_catering":"デリバリー業、ケータリング業、移動販売業"},"leisure_entertainment":{"hotel_inn":"宿泊業：ホテル、旅館","homestay":"宿泊業：民泊","travel_agency":"旅行代理店業","leisure_sports_facility_management":"レジャー、スポーツ等の施設運営業","show_event_management":"ショー、イベント等の興行、イベント運営業"},"lifestyle":{"barber":"ビューティ、ヘルスケア業：床屋、理容室","beauty_salon":"ビューティ、ヘルスケア業：美容室","spa_sand_bath_sauna":"ビューティ、ヘルスケア業：スパ、砂風呂、サウナ等","este_ail_salon":"ビューティ、ヘルスケア業：その他、エステサロン、ネイルサロン等","bridal_planning_introduce_wedding":"冠婚葬祭業：ブライダルプランニング、結婚式場紹介等","memorial_ceremony_funeral":"冠婚葬祭業：メモリアルセレモニー、葬儀等","moving":"引っ越し業","courier_industry":"宅配業","house_maid_cleaning_agency":"家事代行サービス業：無店舗　ハウスメイド、掃除代行等","re_tailoring_clothes":"家事代行サービス業：店舗あり　衣類修理、衣類仕立て直し等"},"education":{"training_institute_management":"研修所等の施設運営業","tutoring_school":"学習塾、進学塾等の教育・学習支援業","music_calligraphy_abacus_classroom":"音楽教室、書道教室、そろばん教室等のの教育・学習支援業","english_school":"英会話スクール等の語学学習支援業","tennis_yoga_judo_school":"テニススクール、ヨガ教室、柔道場等のスポーツ指導、支援業","culture_school":"その他、カルチャースクール等の教育・学習支援業","seminar_planning_management":"セミナー等の企画、運営業"},"medical_welfare":{"hospital_clinic":"医療業：病院、一般診療所、クリニック等","dental_clinic":"医療業：歯科診療所","other_medical_services":"医療業：その他、医療サービス等","nursery":"福祉業：保育所等、児童向け施設型サービス","nursing_home":"福祉業：老人ホーム等、老人向け施設型サービス","rehabilitation_support_services":"福祉業：療育支援サービス等、障害者等向け施設型サービス","other_welfare":"福祉業：その他、施設型福祉サービス","visit_welfare_service":"福祉業：訪問型福祉サービス"},"other_services":{"recruitment_temporary_staffing":"人材紹介業、人材派遣業","life_related_recruitment_temporary_staffing":"生活関連サービスの人材紹介業、人材派遣業","car_maintenance_car_repair":"自動車整備業、自動車修理業","machinery_equipment_maintenance_repair":"機械機器類の整備業、修理業","cleaning_maintenance_building_management":"清掃業、メンテナンス業、建物管理業","security":"警備業","other_services":"その他のサービス業"},"other_association":{"npo":"NPO","general_incorporated_association":"一般社団法人","general_incorporated_foundation":"一般財団法人","other_association":"その他組織"},"other":{}}';

        $codes = json_decode($codesJson);

        foreach ($codes as $key => $value) {
            $parentIndustry = DB::table('industries')
                ->where('code', $key)
                ->first();

            if ($parentIndustry) {
                foreach ($value as $code => $name) {
                    DB::table('industries')->insert([
                        'parent_id' => $parentIndustry->id,
                        'code' => trim($code),
                        'name' => trim($name),
                    ]);
                }
            } else {
                dd($key . ' not found');
            }
        }
    }
}
