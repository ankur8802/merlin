<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>News Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
</head>
<body>


<section class="mt-2">
         <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-dark table-striped table-bordered text-center" id="table_id">
                                            <thead>
                                                <tr>
                                                <th>Portal Name</th>
                                                <th>News Category</th>
                                                <th>headline</th>
                                                <th>News Detail Link</th>
                                                <th>Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>


                            <?php
                            $newsapi = "https://jionews.com/xpressnews/apis/v1.1/feeds/stream?langIds=2&catId=173&limit=24&epoch=0";
                            $chnews = curl_init();
                            curl_setopt($chnews, CURLOPT_RETURNTRANSFER, 1);
                            curl_setopt($chnews, CURLOPT_URL, $newsapi);
                            $newsresult = curl_exec($chnews);
                            $newsresultfinal=json_decode($newsresult);
                            for ($i=0; $i <10; $i++) { 
                            ?>
                                                <tr>
                                                    <th>Jio News</th>
                                                    <td><?= $newsresultfinal->result->items[$i]->categoryName?></td>
                                                    <td><?= $newsresultfinal->result->items[$i]->headline?></td>
                                                    <td>
                                                            <a href="<?= $newsresultfinal->result->items[$i]->link?>" target="_blank" class="btn btn-info">Link</a>
                                                    </td>
                                                    <td><?php 
                                                            $date=$newsresultfinal->result->items[$i]->createdAt;
                                                            $newDate = date("Y-m-d", strtotime($date));
                                                            echo $newDate;
                                                    ?></td>
                                                </tr>
                            <?php }?>

                            <?php
                            $newsapi = "https://jionews.com/xpressnews/apis/v1.1/feeds/stream?langIds=2&catId=10&limit=24&epoch=0";
                            $chnews = curl_init();
                            curl_setopt($chnews, CURLOPT_RETURNTRANSFER, 1);
                            curl_setopt($chnews, CURLOPT_URL, $newsapi);
                            $newsresult = curl_exec($chnews);
                            $newsresultfinal=json_decode($newsresult);
                            for ($i=0; $i <10; $i++) { 
                            ?>
                                                <tr>
                                                    <th>Jio News</th>
                                                    <td><?= $newsresultfinal->result->items[$i]->categoryName?></td>
                                                    <td><?= $newsresultfinal->result->items[$i]->headline?></td>
                                                    <td>
                                                            <a href="<?= $newsresultfinal->result->items[$i]->link?>" target="_blank" class="btn btn-info">Link</a>
                                                    </td>
                                                    <td><?php 
                                                            $date=$newsresultfinal->result->items[$i]->createdAt;
                                                            $newDate = date("Y-m-d", strtotime($date));
                                                            echo $newDate;
                                                    ?></td>
                                                </tr>
                            <?php }?>

                            <?php
                            $newsapi = "https://jionews.com/xpressnews/apis/v1.1/feeds/stream?langIds=2&catId=2&limit=24&epoch=0";
                            $chnews = curl_init();
                            curl_setopt($chnews, CURLOPT_RETURNTRANSFER, 1);
                            curl_setopt($chnews, CURLOPT_URL, $newsapi);
                            $newsresult = curl_exec($chnews);
                            $newsresultfinal=json_decode($newsresult);
                            for ($i=0; $i <10; $i++) { 
                            ?>
                                                <tr>
                                                    <th>Jio News</th>
                                                    <td><?= $newsresultfinal->result->items[$i]->categoryName?></td>
                                                    <td><?= $newsresultfinal->result->items[$i]->headline?></td>
                                                    <td>
                                                            <a href="<?= $newsresultfinal->result->items[$i]->link?>" target="_blank" class="btn btn-info">Link</a>
                                                    </td>
                                                    <td><?php 
                                                            $date=$newsresultfinal->result->items[$i]->createdAt;
                                                            $newDate = date("Y-m-d", strtotime($date));
                                                            echo $newDate;
                                                    ?></td>
                                                </tr>
                            <?php }?>

                            <?php
                            $newsapi = "https://jionews.com/xpressnews/apis/v1.1/feeds/stream?langIds=2&catId=180&limit=24&epoch=0";
                            $chnews = curl_init();
                            curl_setopt($chnews, CURLOPT_RETURNTRANSFER, 1);
                            curl_setopt($chnews, CURLOPT_URL, $newsapi);
                            $newsresult = curl_exec($chnews);
                            $newsresultfinal=json_decode($newsresult);
                            for ($i=0; $i <10; $i++) { 
                            ?>
                                                <tr>
                                                    <th>Jio News</th>
                                                    <td><?= $newsresultfinal->result->items[$i]->categoryName?></td>
                                                    <td><?= $newsresultfinal->result->items[$i]->headline?></td>
                                                    <td>
                                                            <a href="<?= $newsresultfinal->result->items[$i]->link?>" target="_blank" class="btn btn-info">Link</a>
                                                    </td>
                                                    <td><?php 
                                                            $date=$newsresultfinal->result->items[$i]->createdAt;
                                                            $newDate = date("Y-m-d", strtotime($date));
                                                            echo $newDate;
                                                    ?></td>
                                                </tr>
                            <?php }?>

                            <?php
                            $newsapi = "https://jionews.com/xpressnews/apis/v1.1/feeds/stream?langIds=2&catId=3&limit=24&epoch=0";
                            $chnews = curl_init();
                            curl_setopt($chnews, CURLOPT_RETURNTRANSFER, 1);
                            curl_setopt($chnews, CURLOPT_URL, $newsapi);
                            $newsresult = curl_exec($chnews);
                            $newsresultfinal=json_decode($newsresult);
                            for ($i=0; $i <10; $i++) { 
                            ?>
                                                <tr>
                                                    <th>Jio News</th>
                                                    <td><?= $newsresultfinal->result->items[$i]->categoryName?></td>
                                                    <td><?= $newsresultfinal->result->items[$i]->headline?></td>
                                                    <td>
                                                            <a href="<?= $newsresultfinal->result->items[$i]->link?>" target="_blank" class="btn btn-info">Link</a>
                                                    </td>
                                                    <td><?php 
                                                            $date=$newsresultfinal->result->items[$i]->createdAt;
                                                            $newDate = date("Y-m-d", strtotime($date));
                                                            echo $newDate;
                                                    ?></td>
                                                </tr>
                            <?php }?>

                            <?php
                            $newsapi = "https://jionews.com/xpressnews/apis/v1.1/feeds/stream?langIds=2&catId=5&limit=24&epoch=0";
                            $chnews = curl_init();
                            curl_setopt($chnews, CURLOPT_RETURNTRANSFER, 1);
                            curl_setopt($chnews, CURLOPT_URL, $newsapi);
                            $newsresult = curl_exec($chnews);
                            $newsresultfinal=json_decode($newsresult);
                            for ($i=0; $i <10; $i++) { 
                            ?>
                                                <tr>
                                                    <th>Jio News</th>
                                                    <td><?= $newsresultfinal->result->items[$i]->categoryName?></td>
                                                    <td><?= $newsresultfinal->result->items[$i]->headline?></td>
                                                    <td>
                                                            <a href="<?= $newsresultfinal->result->items[$i]->link?>" target="_blank" class="btn btn-info">Link</a>
                                                    </td>
                                                    <td><?php 
                                                            $date=$newsresultfinal->result->items[$i]->createdAt;
                                                            $newDate = date("Y-m-d", strtotime($date));
                                                            echo $newDate;
                                                    ?></td>
                                                </tr>
                            <?php }?>

                            <?php
                            $newsapi = "https://jionews.com/xpressnews/apis/v1.1/feeds/stream?langIds=2&catId=9&limit=24&epoch=0";
                            $chnews = curl_init();
                            curl_setopt($chnews, CURLOPT_RETURNTRANSFER, 1);
                            curl_setopt($chnews, CURLOPT_URL, $newsapi);
                            $newsresult = curl_exec($chnews);
                            $newsresultfinal=json_decode($newsresult);
                            for ($i=0; $i <10; $i++) { 
                            ?>
                                                <tr>
                                                    <th>Jio News</th>
                                                    <td><?= $newsresultfinal->result->items[$i]->categoryName?></td>
                                                    <td><?= $newsresultfinal->result->items[$i]->headline?></td>
                                                    <td>
                                                            <a href="<?= $newsresultfinal->result->items[$i]->link?>" target="_blank" class="btn btn-info">Link</a>
                                                    </td>
                                                    <td><?php 
                                                            $date=$newsresultfinal->result->items[$i]->createdAt;
                                                            $newDate = date("Y-m-d", strtotime($date));
                                                            echo $newDate;
                                                    ?></td>
                                                </tr>
                            <?php }?>

                            <?php
                            $newsapi = "https://jionews.com/xpressnews/apis/v1.1/feeds/stream?langIds=2&catId=58&limit=24&epoch=0";
                            $chnews = curl_init();
                            curl_setopt($chnews, CURLOPT_RETURNTRANSFER, 1);
                            curl_setopt($chnews, CURLOPT_URL, $newsapi);
                            $newsresult = curl_exec($chnews);
                            $newsresultfinal=json_decode($newsresult);
                            for ($i=0; $i <10; $i++) { 
                            ?>
                                                <tr>
                                                    <th>Jio News</th>
                                                    <td><?= $newsresultfinal->result->items[$i]->categoryName?></td>
                                                    <td><?= $newsresultfinal->result->items[$i]->headline?></td>
                                                    <td>
                                                            <a href="<?= $newsresultfinal->result->items[$i]->link?>" target="_blank" class="btn btn-info">Link</a>
                                                    </td>
                                                    <td><?php 
                                                            $date=$newsresultfinal->result->items[$i]->createdAt;
                                                            $newDate = date("Y-m-d", strtotime($date));
                                                            echo $newDate;
                                                    ?></td>
                                                </tr>
                            <?php }?>
                            <?php
                            $newsapi = "https://www.bhaskar.com/__api__/api/1.0/feed/video/home";
                            $headers = [
                                        'x-aut-web-t: 420x66695ztde3qao6a69'
                                        ];


                            $chnews = curl_init();
                            curl_setopt($chnews, CURLOPT_RETURNTRANSFER, 1);
                            curl_setopt($chnews, CURLOPT_HTTPHEADER, $headers);
                            curl_setopt($chnews, CURLOPT_URL, $newsapi);
                            $newsresult = curl_exec($chnews);
                            $newsresultfinal=json_decode($newsresult);
                            for ($i=0; $i <20; $i++) { 
                            ?>
                                                <tr>
                                                    <th>Dainik Bhaska</th>
                                                    <td><?= $newsresultfinal->feed[$i]->category->nameEn?></td>
                                                    <td><?= $newsresultfinal->feed[$i]->header->title?></td>
                                                    <td>
                                                            <a href="<?= $newsresultfinal->feed[$i]->videoSummary->url?>" target="_blank" class="btn btn-info">Link</a>
                                                    </td>
                                                    <td><?php 
                                                            $date=$newsresultfinal->feed[$i]->publishTime;
                                                            $newDate = date("Y-m-d", strtotime($date));
                                                            echo $newDate;
                                                    ?></td>
                                                </tr>
                            <?php }?>

                                            </tbody>
                                    </table>
                    </div>
                </div>
         </div>
</section>


<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

<script>    
$(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>

</body>
</html>