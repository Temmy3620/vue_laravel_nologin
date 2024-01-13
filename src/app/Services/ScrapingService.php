<?php

namespace App\Services;

use Symfony\Component\DomCrawler\Crawler;

class ScrapingService
{
    public function getContents()
    {
        /*
        $checkUrlString = "http://anago.2ch.sc/test/read.cgi/streaming";

        $html = 'https://wiki3.jp/nijisanji_anti/page/7'; // ここに実際のHTMLを入れてください

        

        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', $html);
        $crawler = new Crawler($response->getBody()->getContents());
        
        $urls = $crawler->filter('.uk-width-2-3 a')->extract(['href']);
        
        $filter_url = [];
        foreach($urls as $url)
        {
            if (strpos($url, $checkUrlString) === 0) {
                $filter_url[] = $url;
            }
        }
        return $filter_url;
        */

        
       
        $html = 'https://anago.2ch.sc/test/read.cgi/streaming/1525796928/'; // ここに実際のHTMLを入れてください

        

        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', $html);
        $crawler = new Crawler($response->getBody()->getContents());
        
        $threadEntries = $crawler->filter('dl.thread > dt, dl.thread > dd');
        
        $threads = [];
        $currentDate = null;

        foreach ($threadEntries as $entry) {
            $entryCrawler = new Crawler($entry);
        
            
            if ($entryCrawler->filter('dt')->count() > 0) {
                $currentDate = $entryCrawler->text();
            }
        
            
            if ($entryCrawler->filter('dd')->count() > 0) {
                $content = $entryCrawler->text();

                
                $threads[] = [
                    'date' => $currentDate,
                    'content' => $content,
                ];
            }
        }

        
        return $threads;
        
    }
}