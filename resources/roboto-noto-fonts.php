<?php include SRC_PATH.'/public/header.php'; ?>

<div id="grid-cont">
  <section class="grid_outer chapter">

    <h1 class="chapter-title"><?php echo $vars['title'] ?></h1>
    
    <div class="chapter-content">

      <div class="article-content chapter-intro">
        <div>
          <p>最新版本的 Roboto 是专为移动设备和网页设计的。</p>
          <p>
            <div class="modulettes">
              <a class="modulette download trackdl" download="" href="<?php static_url('../static/media/resources/roboto-noto-fonts/RobotoTTF.zip'); ?>" title="Roboto Font">
                <img alt="" class="icon download-icon" src="<?php static_url('../static/images/callouts/download.svg'); ?>">
                <div class="info">
                  <div class="title">Roboto 字体</div>
                  <span class="subtitle">1.21 MB (.zip) </span>
                </div>
                </img>
              </a>
            </div>
          </p>
          <p>
            <div class="modulettes">
              <a class="modulette download trackdl" download="" href="<?php static_url('../static/media/resources/roboto-noto-fonts/RobotoSpecimenBooklet.pdf'); ?>" title="Roboto specimen booklet">
                <img alt="" class="icon download-icon" src="<?php static_url('../static/images/callouts/download.svg'); ?>">
                <div class="info">
                  <div class="title">Roboto 样本手册</div>
                  <span class="subtitle">1.67 MB (.pdf) </span>
                </div>
                </img>
              </a>
            </div>
          </p>
          <p>Noto 是 Android 上的标准字体，涵盖了所有语言，包括哪些 Roboto 未涵盖的语言。</p>
          <div class="modulettes">
            <a class="modulette container download" href="https://www.google.com/url?q=http://www.google.com/get/noto&amp;sa=D&amp;ust=1481818010233000&amp;usg=AFQjCNFDRorGowf5eMOxCtv0lciFLtuM1w" target="_blank">
              <img alt="" class="icon callout-icon" src="<?php static_url('../static/images/callouts/download.svg'); ?>">
              <div class="info">
                <div class="title">获取 Noto</div>
                <span class="subtitle">下载适用于所有语言的 Noto 字体系列。</span>
              </div>
              </img>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<?php include SRC_PATH.'/public/footer.php'; ?>