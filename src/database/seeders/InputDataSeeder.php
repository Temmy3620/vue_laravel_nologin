<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Symfony\Component\DomCrawler\Crawler;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class InputDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('threads')->truncate();
        
        $checkUrlString = "http://anago.2ch.sc/test/read.cgi/streaming";

        $filter_url = [];

        for ($i = 7; $i <= 65; $i++) {//65

            $html = 'https://wiki3.jp/nijisanji_anti/page/' . $i;
            $client = new \GuzzleHttp\Client();
            $response = $client->request('GET', $html);
            $crawler = new Crawler($response->getBody()->getContents());
        
            $urls = $crawler->filter('.uk-width-2-3 a')->extract(['href']);
        
        
            foreach($urls as $url)
            {
                if (strpos($url, $checkUrlString) === 0) {
                    $filter_url[] = $url;
                }
            }
        }
    
        $threads = [];
    
        foreach($filter_url as $html){
        
        
            $client = new \GuzzleHttp\Client();
            $response = $client->request('GET', $html);
            $crawler = new Crawler($response->getBody()->getContents());
            $title = $crawler->filter('h1')->text();
            $threadEntries = $crawler->filter('dl.thread > dt, dl.thread > dd');
        
        
            $currentDate = null;
        
            foreach ($threadEntries as $entry) {
                $entryCrawler = new Crawler($entry);
            
            
            
            
                if ($entryCrawler->filter('dt')->count() > 0) {
                    $currentDate = $entryCrawler->text();
                    if (preg_match('/(\d{4}\/\d{2}\/\d{2}\(.+?\) \d{2}:\d{2}:\d{2}.\d{2})/', $currentDate, $matches)) {
                        $dateTimeString = $matches[1];
                    
                    } else {
                        $dateTimeString = '2010/01/11(水) 11:11:11.11';
                    }
                
                }
            
            
                if ($entryCrawler->filter('dd')->count() > 0) {
                    $content = $entryCrawler->text();
                    $comment = mb_convert_encoding($content, 'UTF-8');
                
                    

                    DB::table('threads')->insert([
                        'comment' => $comment,
                        'date_and_time' => Carbon::create(
                            intval(substr($dateTimeString, 0, 4)),
                            intval(substr($dateTimeString, 5, 2)),
                            intval(substr($dateTimeString, 8, 2)),
                            intval(substr($dateTimeString, 16, 2)),
                            intval(substr($dateTimeString, 19, 2)),
                            intval(substr($dateTimeString, 22, 2))
                        ),
                        'thread_title' => mb_convert_encoding($title, 'UTF-8'),
                    ]);
                }
                
                //sleep(3600); // sleep関数は秒単位で指定します これで接続エラーを防ぐ
            }
            
        }
    
        
    }
}
