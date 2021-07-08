<?php
require_once 'lib/MysqliDb.php';

function get_blogger($v, $c){
    $db = new MysqliDb(tp_host, tp_user, tp_pass, tp_name);
    $db->where('user_email', $v);
    $n = $db->getOne(users);
    if($c == 'name'){
        return $n['user_fname'].' '.$n['user_lname'];
    }else if($c == 'id'){
        return $n['row_key'];
    }
}

function relative_date($time) {
    $today = strtotime(date('M j, Y'));
    $reldays = ($time - $today)/86400;
    if ($reldays >= 0 && $reldays < 1) {
        return 'Today';
    } else if ($reldays >= 1 && $reldays < 2) {
        return 'Tomorrow';
    } else if ($reldays >= -1 && $reldays < 0) {
        return 'Yesterday';
    }
    if (abs($reldays) < 7) {
        if ($reldays > 0) {
            $reldays = floor($reldays);
            return 'In ' . $reldays . ' day' . ($reldays != 1 ? 's' : '');
        } else {
            $reldays = abs(floor($reldays));
            return $reldays . ' day' . ($reldays != 1 ? 's' : '') . ' ago';
        }
    }
    if (abs($reldays) < 182) {
        return date('l, j F',$time ? $time : time());
    } else {
        return date('l, j F, Y',$time ? $time : time());
    }
}

$db = new MysqliDb(tp_host, tp_user, tp_pass, tp_name);
$db->orderBy('date_created', 'desc');
$t = $db->get(blogs);
?>
            <?php foreach($t as $n) { ?>
            <div class="col-lg-4 col-md-6">
                <div class="bg-light">
                    <img class="img-fluid" src="img/<?=$n['blog_img']?>" alt="">
                    <div class="p-4">
                        <div class="d-flex justify-content-between mb-4">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle me-2" src="img/<?=get_blogger($n['user_email'], 'id')?>.jpg" width="35" height="35" alt="">
                                <span><?=get_blogger($n['user_email'], 'name')?></span>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="ms-3"><i class="far fa-calendar-alt text-primary me-2"></i>
                                    <?=relative_date(strtotime($n['date_created'] ))?></span>
                            </div>
                        </div>
                        <h4 class="text-uppercase mb-3"><?=$n['blog_subj']?></h4>
                        <a class="text-uppercase fw-bold" href="blog-detail.php?post=<?=$n['row_key']?>">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        <?php } ?>