<style type="text/css">
*, *:before, *:after {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
input[type="text"]:focus {
  outline: 0;
  border-color:#5b9dd9 !important;
}
.wrap { 
  border-radius: 5px;
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  float: left;
  width: calc(100% - 22px);
  max-width:1760px;
}
.wrap_header { 
  background:#fc6c33;
  width:100%;
  float:left;
  border-radius: 5px;
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
  padding:13px 10px 7px 10px;
}
.wrap_body{ 
  background:#fff;
  float:left;
  width:100%;
  padding:20px 40px;
  border-radius: 5px;
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.wrap .page_title { 
  font-size: 1.375em;
  color: #000;
  padding: 0;
  text-align: left;
  display: block;
  width:100%;
  margin-top:10px;
}
.video_and_settings { 
  float:left;
  width:100%;
  margin:40px 0;
}
.settings { 
  float:left;
  width:50%;
}
.video { 
  float:left;
  width:50%;
  text-align: right;
  position: relative;
}
.video img {
  cursor: pointer;
  max-width: 100%;
  height:auto;
}
.single_option { 
  float:left;
  width:100%;
  margin-bottom:30px;
  max-width:94%;
  overflow: hidden;
  position: relative;
}
.single_option span.title { 
  font-size:1.25em;
  color:#000;
  display: block;
  margin-bottom:3px;
}
.single_option span.explanation { 
  font-size:0.9375em;
  color:#fc6c33;
  display: block;
}
input[type=text]{ 
  background: #f2f2f2 no-repeat center left 12px;
  border: 0;
  border-bottom: 1px solid #d5d5d5;
  height: 58px;
  margin-top: 3px;
  margin-left:0;
  width: 99%;
  padding-left: 50px;
  color:#838383;
  box-shadow:none !important;
  -webkit-box-shadow:none !important;
  padding-right:200px;
}
input[type=text].input_api_key{ 
  background-image:url("<?php echo plugins_url('img/key.png', __FILE__); ?>");
}
input[type=text].input_traffic{ 
  background-image:url("<?php echo plugins_url('img/traffic_icon.png', __FILE__); ?>");
  background-position-y: 19px;
}
.submit_button { 
  position: absolute;
  top: 56px;
  right: 17px;
  height: 34px;
  background: #008ec1;
  border: 0;
  color: #fff;
  padding: 0 18px;
  cursor: pointer;
  border-radius:3px;
  -moz-border-radius:3px;
  -webkit-border-radius:3px;
}
.submit_button:hover { opacity:0.9; }
.single_option select { 
  background:#f2f2f2;
  border: 0;
  border-bottom: 1px solid #d5d5d5;
  height: 58px;
  margin-top: 3px;
  width: 99%;
  color:#838383;
  box-shadow:none !important;
  -webkit-box-shadow:none !important;
}
input:-webkit-autofill,
input:-webkit-autofill:hover,
input:-webkit-autofill:focus,
input:-webkit-autofill:active {
  transition: all 5000s ease-in-out 0s;
  transition-property: background-color, color;
}
.valid { 
  display: block;
  background: #46b450;
  color: #fff;
  padding: 5px 10px;
  width: 99%;
  margin-top: 3px;
}
.not_valid { 
  display: block;
  background: #dc3232;
  color: #fff;
  padding: 5px 10px;
  width: 99%;
  margin-top: 3px;
}
p.contact_us { 
  font-size:1.125em;
  color:#000;
  margin:20px 0 0 0;
}
p.contact_us a { 
  color:#1449c1;
}
.video iframe { 
  width: 100%;
  position: absolute;
  left: 0;
  top: 0;
  height: calc(100% - 46px);
  display: none;
}
.help_text_wrapper { 
  position: relative;
  float:left;
  width:100%;
}
.help_text_background { 
  float: left;
  width: 100%;
}
.help_text_background img { 
  float:left;
  width:30%;
  position: relative;
  z-index:5;
}
.help_text { 
  position: absolute;
  top: 0;
  bottom: 0;
  width: 70%;
  right: 0;
}
.help_text_table { 
  display: table;
  height: 100%;
}
.help_text_tablecell { 
  display: table-cell;
  vertical-align: middle;
}
.help_text_inner { 
  background: #ffe7d7;
  padding: 20px 15px 20px 30px;
  color: #000;
  margin-left: -36px;
  font-size:1.1em;
  line-height: 1.4em;
}


/* RESPONSIVE */
@media (min-width: 1650px) { 
  .help_text { width:75%; }
  .help_text_background img { width:25%; }
}
@media (max-width: 767px) { 
  .wrap_body { padding:15px; }
  .wrap .page_title { line-height: 1.5em; }
  .settings { width:100%; }
  .video { width:100%; text-align: center; }
  .single_option { max-width: 100%; }
  input[type=text] { padding-right:20px; }
  .submit_button { 
    position: relative;
    top: 0;
    right: 0;
    margin-top: 10px;
  }
  .help_text_background img { 
    width:auto;
    max-width: 100%;
    height: auto;
  }
  .help_text { 
    position: relative;
    width:100%;
    float:left;
    margin-top:25px;
  }
  .help_text_table, .help_text_tablecell { 
    width:100%;
    display: block;
    height: auto;
  }
  .help_text_inner { margin:0; }
  p.contact_us{ margin-top:10px; }


}
#plugin_steps{
  list-style: initial;
  margin-left:19px;
}
</style>


<div class="wrap">
  <div class="wrap_header">
    <img src="<?php echo plugins_url('img/adngin_logo.png', __FILE__) ?>" alt="adngin logo" title="adngin logo" />
  </div>
  <div class="wrap_body">
    <span class="page_title">Your Adsense, Optimized</span>
    <div class="video_and_settings">
      <div class="settings">


        <div class="single_option">
          <form method="post">
            <span class="title">Already have an account?</span>
            <span class="explanation">Fill in your API Key to connect your site to Adngin</span>
            <input class="regular-text input_api_key" type="text" name="adngin_api_key" placeholder="ex: 179123634" value="<?php echo get_option('adngin_api_key') ?>">
            <button class="submit_button" type="submit">Verify My API Key</button>
            <?php if ($valid === true): ?>
            <div class="valid">API key is valid.</div>
          <?php endif; ?>

          <?php if ($valid === false): ?>
          <div class="not_valid">API key is not valid.</div>
        <?php endif; ?>
      </form>
    </div><!-- eof single_option -->

    <div class="single_option">
      <form method="post">
        <span class="title">Traffic Percentage</span>
        <span class="explanation">What percentage of the traffic will be allocated to experiments</span>
        <input class="regular-text input_traffic" type="text" name="adngin_disable_portion_traffic" placeholder="e.g. 60" value="<?php echo get_option('adngin_disable_portion_traffic') ?>">
        <button class="submit_button submit_filter_traffic" type="submit">Update Percentage</button>
        <?php if ($disable_portion_valid) : ?>
        <div class="valid traffic_valiation traffic_valid">Traffic Percentage updated.</div>
      <?php endif; ?>
    </form>
  </div><!-- eof single_option -->


</div><!-- eof settings -->
<div class="video">
  <img src="<?php echo plugins_url('img/video_img.png', __FILE__) ?>" alt="explain video" title="explain video" />
  <iframe width="560" height="315" src="//" frameborder="0" allowfullscreen></iframe>
  <p class="contact_us">Need Help? <a role="link" target="_blank" href="//www.adngin.com">Contact Us!</a></p>
</div>
</div><!-- eof video and settings -->

<div class="help_text_wrapper">
  <div class="help_text_background">
    <img src="<?php echo plugins_url('img/drag_n_drop.png', __FILE__) ?>" alt="Drag and Drop" title="Drag and Drop" />
    <div class="help_text">
      <div class="help_text_table">
        <div class="help_text_tablecell">
          <div class="help_text_inner">
            <span class="page_title">To activate the plugin follow this steps:</span>
            <ul id="plugin_steps">
              <li>Create an AdNgin account at <a href="http://go.adngin.com/register" target="_blank">go.adngin.com/register</a></li>
              <li>Connect your Google Adsense account from your dashboard</li>
              <li>Grab your secret key under from your Settings screen and paste it above</li>
              <li>Allocate a percentage of your traffic to your expriments</li>
              <li>Go to the experiments page at <a href="http://go.adngin.com" target="_blank">go.adngin.com</a> and create your first experiment</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div><!-- eof help_text_wrapper -->

</div>
</div>


<script type="text/javascript">
jQuery(document).ready(function ($) {
  jQuery(".video img").click(function() { 
    jQuery(".video iframe").attr("src","//www.youtube.com/embed/tk4TBW-8cAA?autoplay=1&showinfo=0");
    jQuery(".video iframe").show();
  });
  jQuery(".submit_filter_traffic").click(function() {
    var input_element = jQuery(".input_traffic");
    var val = input_element.val();
    jQuery(".traffic_valiation").remove();
    if ( !val || (val > 100) || (val < 1) || (Math.floor(val) != val) )  {
      jQuery('<div class="not_valid traffic_valiation traffic_not_valid">Traffic Percentage is not valid. Must be whole number(Integer) between 1-100.</div>').insertAfter(".submit_filter_traffic");
      return false;
    }
  });
});
</script>