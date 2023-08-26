<div class="tab-pane" id="gallery-fill" role="tabpanel" aria-labelledby="gallery-tab-fill">
    <div class="row">
        <div class="col-sm-3">
            <?= $this->Form->control('PostMetas.gallery_order',[
                'label'=>'تصاویر بزرگ پیش فرض','class'=>'form-control ltr','placeholder'=>'4,7,15',
                'default'=>(isset($post_meta_list['gallery_order'])?$post_meta_list['gallery_order']:'') ]);?>
        </div>
        <div class="col-sm-9"></div>
        <div class="col-sm-12"><hr></div>

        <div class="col-sm-12" id="newRow">

            <?php 
            $cnt = 0;
            $j=1;
            for($i=1;$i<50;$i++):if(isset($post_meta_list['gallery_img'.$i]) and $post_meta_list['gallery_img'.$i]!=''):?>
                <div class="row">
                    <div class="col-sm-3 mb-1">
                        <?= $this->Form->control('PostMetas.gallery_title'.$j,[
                            'label'=>'عنوان'.$j,'class'=>'form-control',
                            'default'=>(isset($post_meta_list['gallery_title'.$j])?$post_meta_list['gallery_title'.$j]:'') ]);?>
                    </div>
                    <div class="col-sm-5 mb-1">
                        <?= $this->Form->control('PostMetas.gallery_img'.$j,[
                            'label'=>'آدرس تصویر *','class'=>'form-control ltr','placeholder'=>'http://',
                            'default'=>(isset($post_meta_list['gallery_img'.$j])?$post_meta_list['gallery_img'.$j]:'') ]);?>
                    </div>
                    <div class="col-sm-4 mb-1">
                        <?= $this->Form->control('PostMetas.gallery_link'.$j,[
                            'label'=>'لینک مقصد','class'=>'form-control ltr','placeholder'=>'http://',
                            'default'=>(isset($post_meta_list['gallery_link'.$j])?$post_meta_list['gallery_link'.$j]:'') ]);?>
                    </div>
                </div>
            <?php 
            $cnt+=1;
            $j+=1;
            endif;endfor?>
        </div>
        <div class="col-sm-12">
            <button id="addRow" type="button" class="btn btn-info">افزودن سطر جدید</button>
        </div>

    </div>
</div>

<script nonce="<?=get_nonce?>" type="text/javascript">
    // add row
    var rows = <?=$cnt +1?>;
    $("#addRow").click(function () {
        html = `<div class="row">
                <div class="col-sm-3 mb-1">
                    <?= $this->Form->control('PostMetas.gallery_titlexxx',[
                        'label'=>'عنوان xxx','class'=>'form-control']);?>
                </div>
                <div class="col-sm-5 mb-1">
                    <?= $this->Form->control('PostMetas.gallery_imgxxx',[
                        'label'=>'آدرس تصویر *','class'=>'form-control ltr','placeholder'=>'http://']);?>
                </div>
                <div class="col-sm-4 mb-1">
                    <?= $this->Form->control('PostMetas.gallery_linkxxx',[
                        'label'=>'لینک مقصد','class'=>'form-control ltr','placeholder'=>'http://']);?>
                </div>
            </div>`;

        html = html.replaceAll('xxx',rows);
       
        if(rows < 51)
            $('#newRow').append(html);
        else alert('حداکثر 50 عدد می باشد');
        rows +=1;
    });

    // remove row
    $(document).on('click', '#removeRow', function () {
        $(this).closest('#inputFormRow').remove();
    });
</script>