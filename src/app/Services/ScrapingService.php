<?php

namespace App\Services;

use Symfony\Component\DomCrawler\Crawler;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use DateTime;
use Carbon\Carbon;
use Symfony\Component\HttpFoundation\StreamedResponse;

class ScrapingService
{
    public function getContents()
    {
        
        
            
        $checkUrlString = "http://anago.2ch.sc/test/read.cgi/streaming";

        $filter_url = [];

        for ($i = 7; $i <= 8; $i++) {//65
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
                
                
                    $threads[] = [
                        'title' => $title,
                        'yaer' => intval(substr($dateTimeString, 0, 4)),
                        'month' => intval(substr($dateTimeString, 5, 2)),
                        'date' => intval(substr($dateTimeString, 8, 2)),
                        'h' => intval(substr($dateTimeString, 16, 2)),
                        'm' => intval(substr($dateTimeString, 19, 2)),
                        's' => intval(substr($dateTimeString, 22, 2)),
                        'micro' => intval(substr($dateTimeString, 25, 2)),
                        'content' => $content,
                    ];
                }
            }
            //dd($threads);
        }
    
        return $threads;
    
    
    
    
        
        

    }
}