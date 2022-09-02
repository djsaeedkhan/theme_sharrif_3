<div class1="<?=(lang=='fa')?'pr-1':'pl-1'?> row" style1="<?=(lang=='fa')?'float:left;':'float:right;'?>">

    <?php if(isset($metalist['sc_personal']) and $metalist['sc_personal'] != ''):?>
    <div class="pl-2">
        <a href="<?=$metalist['sc_personal']?>" title="<?=$metalist['sc_personal']?>" target="_blank"
            class="social-icon si-dark1 si-pinboard si-small" title="<?=$metalist['sc_personal']?>" data-toggle="tooltip" data-placement="top" >
            <i class="icon-line-link"></i>
            <i class="icon-line-link"></i>
        </a>
    </div>
    <?php endif?>

    <?php if(isset($metalist['sc_instagram']) and $metalist['sc_instagram'] != ''):?>
    <div class="pl-2">
        <a href="<?=$metalist['sc_instagram']?>" title="<?=$metalist['sc_instagram']?>" target="_blank"
            class="social-icon si-instagram si-small" data-toggle="tooltip" data-placement="top" title="<?=$metalist['sc_instagram']?>">
            <i class="icon-instagram"></i>
            <i class="icon-instagram"></i>
        </a>
    </div>
    <?php endif?>
    
    <?php if(isset($metalist['sc_twitter']) and $metalist['sc_twitter'] != ''):?>
    <div class="pl-2">
        <a href="<?=$metalist['sc_twitter']?>" title="<?=$metalist['sc_twitter']?>" target="_blank"
            class="social-icon si-twitter si-small" data-toggle="tooltip" data-placement="top" title="<?=$metalist['sc_twitter']?>">
            <i class="icon-twitter"></i>
            <i class="icon-twitter"></i>
        </a>
    </div>
    <?php endif?>
    
    <?php if(isset($metalist['sc_facebook']) and $metalist['sc_facebook'] != ''):?>
    <div class="pl-2">
        <a href="<?=$metalist['sc_facebook']?>" title="<?=$metalist['sc_facebook']?>"  target="_blank" 
            class="social-icon si-facebook si-small" data-toggle="tooltip" data-placement="top" title="<?=$metalist['sc_facebook']?>">
            <i class="icon-facebook"></i>
            <i class="icon-facebook"></i>
        </a>
    </div>
    <?php endif?>
    
    <?php if(isset($metalist['sc_telegram']) and $metalist['sc_telegram'] != ''):?>
    <div class="pl-2">
        <a href="<?= $metalist['sc_telegram']?>" title="<?= $metalist['sc_telegram']?>" target="_blank" 
            class="social-icon si-twitter si-small" data-toggle="tooltip" data-placement="top" title="<?= $metalist['sc_telegram']?>">
            <i class="icon-telegram"></i>
            <i class="icon-telegram"></i>
        </a>
    </div>
    <?php endif?>

    <?php if(isset($metalist['sc_linkedin']) and $metalist['sc_linkedin'] != ''):?>
    <div class="pl-2">
        <a href="<?= $metalist['sc_linkedin']?>" title="<?= $metalist['sc_linkedin']?>" target="_blank" 
            class="social-icon si-linkedin si-small" data-toggle="tooltip" data-placement="top" title="<?= $metalist['sc_linkedin']?>">
            <i class="icon-linkedin"></i>
            <i class="icon-linkedin"></i>
        </a>
    </div>
    <?php endif?>

    <?php if(isset($metalist['sc_youtube']) and $metalist['sc_youtube'] != ''):?>
    <div class="pl-2">
        <a href="<?= $metalist['sc_youtube']?>" title="<?= $metalist['sc_youtube']?>" target="_blank" 
            class="social-icon si-youtube si-small" data-toggle="tooltip" data-placement="top" title="<?= $metalist['sc_youtube']?>">
            <i class="icon-youtube"></i>
            <i class="icon-youtube"></i>
        </a>
    </div>
    <?php endif?>

    <?php if(isset($metalist['sc_aparat']) and $metalist['sc_aparat'] != ''):?>
    <div class="pl-2">
        <a href="<?= $metalist['sc_aparat']?>" title="<?= $metalist['sc_aparat']?>" target="_blank" 
            class="social-icon si-youtube si-small" data-toggle="tooltip" data-placement="top" title="<?= $metalist['sc_aparat']?>">
            <?= $this->html->image('/template/img/aparat.png',[
                'style'=>"width: 33px;padding: 7px;filter: grayscale(100%);"])?>
        </a>
    </div>
    <?php endif?>

    <?php if(isset($metalist['sc_bale']) and $metalist['sc_bale'] != ''):?>
    <div class="pl-2">
        <a href="<?= $metalist['sc_bale']?>" title="<?= $metalist['sc_bale']?>" target="_blank" 
            class="social-icon si-youtube si-small" data-toggle="tooltip" data-placement="top" title="<?= $metalist['sc_bale']?>">
            <?= $this->html->image('/template/img/bale.png',[
                'style'=>"width: 33px;padding: 7px;filter: grayscale(100%);"])?>
        </a>
    </div>
    <?php endif?>

    <?php if(isset($metalist['sc_rg']) and $metalist['sc_rg'] != ''):?>
    <div class="pl-2">
        <a href="<?= $metalist['sc_rg']?>" title="<?= $metalist['sc_rg']?>" target="_blank" 
            class="social-icon si-youtube si-small" data-toggle="tooltip" data-placement="top" title="<?= $metalist['sc_rg']?>">
            <?= $this->html->image('/template/img/regate.png',[
                'style'=>"width: 33px;padding: 7px;filter: grayscale(100%);"])?>
        </a>
    </div>
    <?php endif?>

    <?php if(isset($metalist['sc_orc']) and $metalist['sc_orc'] != ''):?>
    <div class="pl-2">
        <a href="<?= $metalist['sc_orc']?>" title="<?= $metalist['sc_orc']?>" target="_blank" 
            class="social-icon si-youtube si-small" data-toggle="tooltip" data-placement="top" title="<?= $metalist['sc_orc']?>">
            <?= $this->html->image('/template/img/orcid.png',[
                'style'=>"width: 33px;padding: 7px;filter: grayscale(100%);"])?>
        </a>
    </div>
    <?php endif?>

    <?php if(isset($metalist['sc_gosc']) and $metalist['sc_gosc'] != ''):?>
    <div class="pl-2">
        <a href="<?= $metalist['sc_gosc']?>" title="<?= $metalist['sc_gosc']?>" target="_blank" 
            class="social-icon si-youtube si-small" data-toggle="tooltip" data-placement="top" title="<?= $metalist['sc_gosc']?>">
            <?= $this->html->image('/template/img/gsch.png',[
                'style'=>"width: 33px;padding: 7px;filter: grayscale(100%);"])?>
        </a>
    </div>
    <?php endif?>

    <?php if(isset($metalist['sc_wos']) and $metalist['sc_wos'] != ''):?>
    <div class="pl-2">
        <a href="<?= $metalist['sc_wos']?>" title="<?= $metalist['sc_wos']?>" target="_blank" 
            class="social-icon si-youtube si-small" data-toggle="tooltip" data-placement="top" title="<?= $metalist['sc_wos']?>">
            <?= $this->html->image('/template/img/wos.png',[
                'style'=>"width: 33px;padding: 7px;filter: grayscale(100%);"])?>
        </a>
    </div>
    <?php endif?>

    <?php if(isset($metalist['sc_scop']) and $metalist['sc_scop'] != ''):?>
    <div class="pl-2">
        <a href="<?= $metalist['sc_scop']?>" title="<?= $metalist['sc_scop']?>" target="_blank" 
            class="social-icon si-youtube si-small" data-toggle="tooltip" data-placement="top" title="<?= $metalist['sc_scop']?>">
            <?= $this->html->image('/template/img/scopus.png',[
                'style'=>"width: 33px;padding: 7px;filter: grayscale(100%);"])?>
        </a>
    </div>
    <?php endif?>

    <?php if(isset($metalist['sc_email']) and $metalist['sc_email'] != ''):
        $email =  str_replace('@','[@]',$metalist['sc_email']);?>
        <a href="mailto:<?= $email?>" title="<?= $email?>" target="_blank" 
            class="social-icon si-linkedin si-small" data-toggle="tooltip" data-placement="top" title="<?= $email?>">
            <i class="icon-email3"></i>
            <i class="icon-email3"></i>
        </a>
    <?php endif?>

</div>