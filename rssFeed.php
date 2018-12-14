                <?php
                    function getContent() {
                        //Thanks to https://davidwalsh.name/php-cache-function for cache idea
                        $file = "./feed-cache.txt";
                        $current_time = time();
                        $expire_time = 5 * 60;
                        $file_time = filemtime($file);

                        if(file_exists($file) && ($current_time - $expire_time < $file_time)) {
                            return file_get_contents($file);
                        }
                        else {
                            $content = getFreshContent();
                            file_put_contents($file, $content);
                            return $content;
                        }
                    }

                    function getFreshContent() {
                        $html = "";
                        $newsSource = array(
                            array(
                                "title" => "American Mathematical Society Feature Column",
                                "url" => "http://www.ams.org/featurecolumn.rss"
                            ),
                            array(
                                "title" => "Mathematical Association of America News",
                                "url" => "https://www.maa.org/news/rss.xml"
                            ),
                            array(
                                "title" => "Hacker News",
                                "url" => "https://blogs.ams.org/phdplus/feed/"
                            )
                        );
                        function getFeed($url){
                            $html = "";
                            $rss = simplexml_load_file($url);
                            $count = 0;
                            $html .= '<ul>';
                            foreach($rss->channel->item as$item) {
                                $count++;
                                if($count > 7){
                                    break;
                                }
                                $html .= '<li><a href="'.htmlspecialchars($item->link).'">'.htmlspecialchars($item->title).'</a></li>';
                            }
                            $html .= '</ul>';
                            return $html;
                        }

                        foreach($newsSource as $source) {
                            $html .= '<h2>'.$source["title"].'</h2>';
                            $html .= getFeed($source["url"]);
                        }
                        return $html;
                    }

                    print getContent();
                ?>

