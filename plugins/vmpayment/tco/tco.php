


<!DOCTYPE html>
<html>
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# githubog: http://ogp.me/ns/fb/githubog#">
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>2CO_VirtueMart2/plugins/vmpayment/tco/tco.php at master · craigchristenson/2CO_VirtueMart2 · GitHub</title>
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="GitHub" />
    <link rel="fluid-icon" href="https://github.com/fluidicon.png" title="GitHub" />
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-114.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-144.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144.png" />
    <link rel="logo" type="image/svg" href="https://github-media-downloads.s3.amazonaws.com/github-logo.svg" />
    <meta property="og:image" content="https://github.global.ssl.fastly.net/images/modules/logos_page/Octocat.png">
    <meta name="hostname" content="github-fe115-cp1-prd.iad.github.net">
    <meta name="ruby" content="ruby 1.9.3p194-tcs-github-tcmalloc (2012-05-25, TCS patched 2012-05-27, GitHub v1.0.36) [x86_64-linux]">
    <link rel="assets" href="https://github.global.ssl.fastly.net/">
    <link rel="conduit-xhr" href="https://ghconduit.com:25035/">
    <link rel="xhr-socket" href="/_sockets" />
    


    <meta name="msapplication-TileImage" content="/windows-tile.png" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="selected-link" value="repo_source" data-pjax-transient />
    <meta content="collector.githubapp.com" name="octolytics-host" /><meta content="github" name="octolytics-app-id" /><meta content="5C710A34:3B90:18F8A601:525AB025" name="octolytics-dimension-request_id" />
    

    
    
    <link rel="icon" type="image/x-icon" href="/favicon.ico" />

    <meta content="authenticity_token" name="csrf-param" />
<meta content="Fu303M7SSpachFxbAXod6HeZ+89nXtLVo4vHiW3+418=" name="csrf-token" />

    <link href="https://github.global.ssl.fastly.net/assets/github-ce4d3d1122ff6f5d3c4e8bbc3002c454a5f0861c.css" media="all" rel="stylesheet" type="text/css" />
    <link href="https://github.global.ssl.fastly.net/assets/github2-3fe403d0db22dd33cdbaedfd659caee3b1b22abd.css" media="all" rel="stylesheet" type="text/css" />
    

    

      <script src="https://github.global.ssl.fastly.net/assets/frameworks-5036c64d838328b79e082f548848e2898412e869.js" type="text/javascript"></script>
      <script src="https://github.global.ssl.fastly.net/assets/github-ebd9cc9a650951526861fa81910e3d79ef2481ee.js" type="text/javascript"></script>
      
      <meta http-equiv="x-pjax-version" content="ec8d050d6e38995c3d20ef8317019fed">

        <link data-pjax-transient rel='permalink' href='/craigchristenson/2CO_VirtueMart2/blob/368c84ebce263b40a939694e4b59bcc85c3f3d3d/plugins/vmpayment/tco/tco.php'>
  <meta property="og:title" content="2CO_VirtueMart2"/>
  <meta property="og:type" content="githubog:gitrepository"/>
  <meta property="og:url" content="https://github.com/craigchristenson/2CO_VirtueMart2"/>
  <meta property="og:image" content="https://github.global.ssl.fastly.net/images/gravatars/gravatar-user-420.png"/>
  <meta property="og:site_name" content="GitHub"/>
  <meta property="og:description" content="2CO_VirtueMart2 - 2Checkout payment module for VirtueMart 2.0"/>

  <meta name="description" content="2CO_VirtueMart2 - 2Checkout payment module for VirtueMart 2.0" />

  <meta content="251493" name="octolytics-dimension-user_id" /><meta content="craigchristenson" name="octolytics-dimension-user_login" /><meta content="3698302" name="octolytics-dimension-repository_id" /><meta content="craigchristenson/2CO_VirtueMart2" name="octolytics-dimension-repository_nwo" /><meta content="true" name="octolytics-dimension-repository_public" /><meta content="false" name="octolytics-dimension-repository_is_fork" /><meta content="3698302" name="octolytics-dimension-repository_network_root_id" /><meta content="craigchristenson/2CO_VirtueMart2" name="octolytics-dimension-repository_network_root_nwo" />
  <link href="https://github.com/craigchristenson/2CO_VirtueMart2/commits/master.atom" rel="alternate" title="Recent Commits to 2CO_VirtueMart2:master" type="application/atom+xml" />

  </head>


  <body class="logged_out  env-production windows vis-public  page-blob">
    <div class="wrapper">
      
      
      


      
      <div class="header header-logged-out">
  <div class="container clearfix">

    <a class="header-logo-wordmark" href="https://github.com/">
      <span class="mega-octicon octicon-logo-github"></span>
    </a>

    <div class="header-actions">
        <a class="button primary" href="/signup">Sign up</a>
      <a class="button signin" href="/login?return_to=%2Fcraigchristenson%2F2CO_VirtueMart2%2Fblob%2Fmaster%2Fplugins%2Fvmpayment%2Ftco%2Ftco.php">Sign in</a>
    </div>

    <div class="command-bar js-command-bar  in-repository">

      <ul class="top-nav">
          <li class="explore"><a href="/explore">Explore</a></li>
        <li class="features"><a href="/features">Features</a></li>
          <li class="enterprise"><a href="https://enterprise.github.com/">Enterprise</a></li>
          <li class="blog"><a href="/blog">Blog</a></li>
      </ul>
        <form accept-charset="UTF-8" action="/search" class="command-bar-form" id="top_search_form" method="get">

<input type="text" data-hotkey="/ s" name="q" id="js-command-bar-field" placeholder="Search or type a command" tabindex="1" autocapitalize="off"
    
    
      data-repo="craigchristenson/2CO_VirtueMart2"
      data-branch="master"
      data-sha="1f5575600624e5afe5c8b005acd58fd000978065"
  >

    <input type="hidden" name="nwo" value="craigchristenson/2CO_VirtueMart2" />

    <div class="select-menu js-menu-container js-select-menu search-context-select-menu">
      <span class="minibutton select-menu-button js-menu-target">
        <span class="js-select-button">This repository</span>
      </span>

      <div class="select-menu-modal-holder js-menu-content js-navigation-container">
        <div class="select-menu-modal">

          <div class="select-menu-item js-navigation-item js-this-repository-navigation-item selected">
            <span class="select-menu-item-icon octicon octicon-check"></span>
            <input type="radio" class="js-search-this-repository" name="search_target" value="repository" checked="checked" />
            <div class="select-menu-item-text js-select-button-text">This repository</div>
          </div> <!-- /.select-menu-item -->

          <div class="select-menu-item js-navigation-item js-all-repositories-navigation-item">
            <span class="select-menu-item-icon octicon octicon-check"></span>
            <input type="radio" name="search_target" value="global" />
            <div class="select-menu-item-text js-select-button-text">All repositories</div>
          </div> <!-- /.select-menu-item -->

        </div>
      </div>
    </div>

  <span class="octicon help tooltipped downwards" title="Show command bar help">
    <span class="octicon octicon-question"></span>
  </span>


  <input type="hidden" name="ref" value="cmdform">

</form>
    </div>

  </div>
</div>


      


          <div class="site" itemscope itemtype="http://schema.org/WebPage">
    
    <div class="pagehead repohead instapaper_ignore readability-menu">
      <div class="container">
        

<ul class="pagehead-actions">


  <li>
  <a href="/login?return_to=%2Fcraigchristenson%2F2CO_VirtueMart2"
  class="minibutton with-count js-toggler-target star-button entice tooltipped upwards"
  title="You must be signed in to use this feature" rel="nofollow">
  <span class="octicon octicon-star"></span>Star
</a>
<a class="social-count js-social-count" href="/craigchristenson/2CO_VirtueMart2/stargazers">
  2
</a>

  </li>

    <li>
      <a href="/login?return_to=%2Fcraigchristenson%2F2CO_VirtueMart2"
        class="minibutton with-count js-toggler-target fork-button entice tooltipped upwards"
        title="You must be signed in to fork a repository" rel="nofollow">
        <span class="octicon octicon-git-branch"></span>Fork
      </a>
      <a href="/craigchristenson/2CO_VirtueMart2/network" class="social-count">
        4
      </a>
    </li>
</ul>

        <h1 itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="entry-title public">
          <span class="repo-label"><span>public</span></span>
          <span class="mega-octicon octicon-repo"></span>
          <span class="author">
            <a href="/craigchristenson" class="url fn" itemprop="url" rel="author"><span itemprop="title">craigchristenson</span></a>
          </span>
          <span class="repohead-name-divider">/</span>
          <strong><a href="/craigchristenson/2CO_VirtueMart2" class="js-current-repository js-repo-home-link">2CO_VirtueMart2</a></strong>

          <span class="page-context-loader">
            <img alt="Octocat-spinner-32" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
          </span>

        </h1>
      </div><!-- /.container -->
    </div><!-- /.repohead -->

    <div class="container">

      <div class="repository-with-sidebar repo-container ">

        <div class="repository-sidebar">
            

<div class="repo-nav repo-nav-full js-repository-container-pjax js-octicon-loaders">
  <div class="repo-nav-contents">
    <ul class="repo-menu">
      <li class="tooltipped leftwards" title="Code">
        <a href="/craigchristenson/2CO_VirtueMart2" aria-label="Code" class="js-selected-navigation-item selected" data-gotokey="c" data-pjax="true" data-selected-links="repo_source repo_downloads repo_commits repo_tags repo_branches /craigchristenson/2CO_VirtueMart2">
          <span class="octicon octicon-code"></span> <span class="full-word">Code</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

        <li class="tooltipped leftwards" title="Issues">
          <a href="/craigchristenson/2CO_VirtueMart2/issues" aria-label="Issues" class="js-selected-navigation-item js-disable-pjax" data-gotokey="i" data-selected-links="repo_issues /craigchristenson/2CO_VirtueMart2/issues">
            <span class="octicon octicon-issue-opened"></span> <span class="full-word">Issues</span>
            <span class='counter'>0</span>
            <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>        </li>

      <li class="tooltipped leftwards" title="Pull Requests"><a href="/craigchristenson/2CO_VirtueMart2/pulls" aria-label="Pull Requests" class="js-selected-navigation-item js-disable-pjax" data-gotokey="p" data-selected-links="repo_pulls /craigchristenson/2CO_VirtueMart2/pulls">
            <span class="octicon octicon-git-pull-request"></span> <span class="full-word">Pull Requests</span>
            <span class='counter'>0</span>
            <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>


    </ul>
    <div class="repo-menu-separator"></div>
    <ul class="repo-menu">

      <li class="tooltipped leftwards" title="Pulse">
        <a href="/craigchristenson/2CO_VirtueMart2/pulse" aria-label="Pulse" class="js-selected-navigation-item " data-pjax="true" data-selected-links="pulse /craigchristenson/2CO_VirtueMart2/pulse">
          <span class="octicon octicon-pulse"></span> <span class="full-word">Pulse</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

      <li class="tooltipped leftwards" title="Graphs">
        <a href="/craigchristenson/2CO_VirtueMart2/graphs" aria-label="Graphs" class="js-selected-navigation-item " data-pjax="true" data-selected-links="repo_graphs repo_contributors /craigchristenson/2CO_VirtueMart2/graphs">
          <span class="octicon octicon-graph"></span> <span class="full-word">Graphs</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

      <li class="tooltipped leftwards" title="Network">
        <a href="/craigchristenson/2CO_VirtueMart2/network" aria-label="Network" class="js-selected-navigation-item js-disable-pjax" data-selected-links="repo_network /craigchristenson/2CO_VirtueMart2/network">
          <span class="octicon octicon-git-branch"></span> <span class="full-word">Network</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>
    </ul>


  </div>
</div>

            <div class="only-with-full-nav">
              

  

<div class="clone-url open"
  data-protocol-type="http"
  data-url="/users/set_protocol?protocol_selector=http&amp;protocol_type=clone">
  <h3><strong>HTTPS</strong> clone URL</h3>
  <div class="clone-url-box">
    <input type="text" class="clone js-url-field"
           value="https://github.com/craigchristenson/2CO_VirtueMart2.git" readonly="readonly">

    <span class="js-zeroclipboard url-box-clippy minibutton zeroclipboard-button" data-clipboard-text="https://github.com/craigchristenson/2CO_VirtueMart2.git" data-copied-hint="copied!" title="copy to clipboard"><span class="octicon octicon-clippy"></span></span>
  </div>
</div>

  

<div class="clone-url "
  data-protocol-type="subversion"
  data-url="/users/set_protocol?protocol_selector=subversion&amp;protocol_type=clone">
  <h3><strong>Subversion</strong> checkout URL</h3>
  <div class="clone-url-box">
    <input type="text" class="clone js-url-field"
           value="https://github.com/craigchristenson/2CO_VirtueMart2" readonly="readonly">

    <span class="js-zeroclipboard url-box-clippy minibutton zeroclipboard-button" data-clipboard-text="https://github.com/craigchristenson/2CO_VirtueMart2" data-copied-hint="copied!" title="copy to clipboard"><span class="octicon octicon-clippy"></span></span>
  </div>
</div>


<p class="clone-options">You can clone with
      <a href="#" class="js-clone-selector" data-protocol="http">HTTPS</a>,
      or <a href="#" class="js-clone-selector" data-protocol="subversion">Subversion</a>.
  <span class="octicon help tooltipped upwards" title="Get help on which URL is right for you.">
    <a href="https://help.github.com/articles/which-remote-url-should-i-use">
    <span class="octicon octicon-question"></span>
    </a>
  </span>
</p>


  <a href="http://windows.github.com" class="minibutton sidebar-button">
    <span class="octicon octicon-device-desktop"></span>
    Clone in Desktop
  </a>

              <a href="/craigchristenson/2CO_VirtueMart2/archive/master.zip"
                 class="minibutton sidebar-button"
                 title="Download this repository as a zip file"
                 rel="nofollow">
                <span class="octicon octicon-cloud-download"></span>
                Download ZIP
              </a>
            </div>
        </div><!-- /.repository-sidebar -->

        <div id="js-repo-pjax-container" class="repository-content context-loader-container" data-pjax-container>
          


<!-- blob contrib key: blob_contributors:v21:04edb80e5e30114f0093779b06d27735 -->

<p title="This is a placeholder element" class="js-history-link-replace hidden"></p>

<a href="/craigchristenson/2CO_VirtueMart2/find/master" data-pjax data-hotkey="t" class="js-show-file-finder" style="display:none">Show File Finder</a>

<div class="file-navigation">
  
  

<div class="select-menu js-menu-container js-select-menu" >
  <span class="minibutton select-menu-button js-menu-target" data-hotkey="w"
    data-master-branch="master"
    data-ref="master"
    role="button" aria-label="Switch branches or tags" tabindex="0">
    <span class="octicon octicon-git-branch"></span>
    <i>branch:</i>
    <span class="js-select-button">master</span>
  </span>

  <div class="select-menu-modal-holder js-menu-content js-navigation-container" data-pjax>

    <div class="select-menu-modal">
      <div class="select-menu-header">
        <span class="select-menu-title">Switch branches/tags</span>
        <span class="octicon octicon-remove-close js-menu-close"></span>
      </div> <!-- /.select-menu-header -->

      <div class="select-menu-filters">
        <div class="select-menu-text-filter">
          <input type="text" aria-label="Filter branches/tags" id="context-commitish-filter-field" class="js-filterable-field js-navigation-enable" placeholder="Filter branches/tags">
        </div>
        <div class="select-menu-tabs">
          <ul>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="branches" class="js-select-menu-tab">Branches</a>
            </li>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="tags" class="js-select-menu-tab">Tags</a>
            </li>
          </ul>
        </div><!-- /.select-menu-tabs -->
      </div><!-- /.select-menu-filters -->

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="branches">

        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


            <div class="select-menu-item js-navigation-item selected">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/craigchristenson/2CO_VirtueMart2/blob/master/plugins/vmpayment/tco/tco.php"
                 data-name="master"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="master">master</a>
            </div> <!-- /.select-menu-item -->
        </div>

          <div class="select-menu-no-results">Nothing to show</div>
      </div> <!-- /.select-menu-list -->

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="tags">
        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


        </div>

        <div class="select-menu-no-results">Nothing to show</div>
      </div> <!-- /.select-menu-list -->

    </div> <!-- /.select-menu-modal -->
  </div> <!-- /.select-menu-modal-holder -->
</div> <!-- /.select-menu -->

  <div class="breadcrumb">
    <span class='repo-root js-repo-root'><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/craigchristenson/2CO_VirtueMart2" data-branch="master" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">2CO_VirtueMart2</span></a></span></span><span class="separator"> / </span><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/craigchristenson/2CO_VirtueMart2/tree/master/plugins" data-branch="master" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">plugins</span></a></span><span class="separator"> / </span><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/craigchristenson/2CO_VirtueMart2/tree/master/plugins/vmpayment" data-branch="master" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">vmpayment</span></a></span><span class="separator"> / </span><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/craigchristenson/2CO_VirtueMart2/tree/master/plugins/vmpayment/tco" data-branch="master" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">tco</span></a></span><span class="separator"> / </span><strong class="final-path">tco.php</strong> <span class="js-zeroclipboard minibutton zeroclipboard-button" data-clipboard-text="plugins/vmpayment/tco/tco.php" data-copied-hint="copied!" title="copy to clipboard"><span class="octicon octicon-clippy"></span></span>
  </div>
</div>


  <div class="commit commit-loader file-history-tease js-deferred-content" data-url="/craigchristenson/2CO_VirtueMart2/contributors/master/plugins/vmpayment/tco/tco.php">
    Fetching contributors…

    <div class="participation">
      <p class="loader-loading"><img alt="Octocat-spinner-32-eaf2f5" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32-EAF2F5.gif" width="16" /></p>
      <p class="loader-error">Cannot retrieve contributors at this time</p>
    </div>
  </div>

<div id="files" class="bubble">
  <div class="file">
    <div class="meta">
      <div class="info">
        <span class="icon"><b class="octicon octicon-file-text"></b></span>
        <span class="mode" title="File Mode">file</span>
          <span>622 lines (534 sloc)</span>
        <span>23.086 kb</span>
      </div>
      <div class="actions">
        <div class="button-group">
            <a class="minibutton tooltipped leftwards"
               href="http://windows.github.com" title="Open this file in GitHub for Windows">
                <span class="octicon octicon-device-desktop"></span> Open
            </a>
              <a class="minibutton disabled js-entice" href=""
                 data-entice="You must be signed in to make or propose changes">Edit</a>
          <a href="/craigchristenson/2CO_VirtueMart2/raw/master/plugins/vmpayment/tco/tco.php" class="button minibutton " id="raw-url">Raw</a>
            <a href="/craigchristenson/2CO_VirtueMart2/blame/master/plugins/vmpayment/tco/tco.php" class="button minibutton ">Blame</a>
          <a href="/craigchristenson/2CO_VirtueMart2/commits/master/plugins/vmpayment/tco/tco.php" class="button minibutton " rel="nofollow">History</a>
        </div><!-- /.button-group -->
          <a class="minibutton danger empty-icon js-entice" href=""
             data-entice="You must be signed in and on a branch to make or propose changes">
          Delete
        </a>
      </div><!-- /.actions -->

    </div>
        <div class="blob-wrapper data type-php js-blob-data">
        <table class="file-code file-diff">
          <tr class="file-code-line">
            <td class="blob-line-nums">
              <span id="L1" rel="#L1">1</span>
<span id="L2" rel="#L2">2</span>
<span id="L3" rel="#L3">3</span>
<span id="L4" rel="#L4">4</span>
<span id="L5" rel="#L5">5</span>
<span id="L6" rel="#L6">6</span>
<span id="L7" rel="#L7">7</span>
<span id="L8" rel="#L8">8</span>
<span id="L9" rel="#L9">9</span>
<span id="L10" rel="#L10">10</span>
<span id="L11" rel="#L11">11</span>
<span id="L12" rel="#L12">12</span>
<span id="L13" rel="#L13">13</span>
<span id="L14" rel="#L14">14</span>
<span id="L15" rel="#L15">15</span>
<span id="L16" rel="#L16">16</span>
<span id="L17" rel="#L17">17</span>
<span id="L18" rel="#L18">18</span>
<span id="L19" rel="#L19">19</span>
<span id="L20" rel="#L20">20</span>
<span id="L21" rel="#L21">21</span>
<span id="L22" rel="#L22">22</span>
<span id="L23" rel="#L23">23</span>
<span id="L24" rel="#L24">24</span>
<span id="L25" rel="#L25">25</span>
<span id="L26" rel="#L26">26</span>
<span id="L27" rel="#L27">27</span>
<span id="L28" rel="#L28">28</span>
<span id="L29" rel="#L29">29</span>
<span id="L30" rel="#L30">30</span>
<span id="L31" rel="#L31">31</span>
<span id="L32" rel="#L32">32</span>
<span id="L33" rel="#L33">33</span>
<span id="L34" rel="#L34">34</span>
<span id="L35" rel="#L35">35</span>
<span id="L36" rel="#L36">36</span>
<span id="L37" rel="#L37">37</span>
<span id="L38" rel="#L38">38</span>
<span id="L39" rel="#L39">39</span>
<span id="L40" rel="#L40">40</span>
<span id="L41" rel="#L41">41</span>
<span id="L42" rel="#L42">42</span>
<span id="L43" rel="#L43">43</span>
<span id="L44" rel="#L44">44</span>
<span id="L45" rel="#L45">45</span>
<span id="L46" rel="#L46">46</span>
<span id="L47" rel="#L47">47</span>
<span id="L48" rel="#L48">48</span>
<span id="L49" rel="#L49">49</span>
<span id="L50" rel="#L50">50</span>
<span id="L51" rel="#L51">51</span>
<span id="L52" rel="#L52">52</span>
<span id="L53" rel="#L53">53</span>
<span id="L54" rel="#L54">54</span>
<span id="L55" rel="#L55">55</span>
<span id="L56" rel="#L56">56</span>
<span id="L57" rel="#L57">57</span>
<span id="L58" rel="#L58">58</span>
<span id="L59" rel="#L59">59</span>
<span id="L60" rel="#L60">60</span>
<span id="L61" rel="#L61">61</span>
<span id="L62" rel="#L62">62</span>
<span id="L63" rel="#L63">63</span>
<span id="L64" rel="#L64">64</span>
<span id="L65" rel="#L65">65</span>
<span id="L66" rel="#L66">66</span>
<span id="L67" rel="#L67">67</span>
<span id="L68" rel="#L68">68</span>
<span id="L69" rel="#L69">69</span>
<span id="L70" rel="#L70">70</span>
<span id="L71" rel="#L71">71</span>
<span id="L72" rel="#L72">72</span>
<span id="L73" rel="#L73">73</span>
<span id="L74" rel="#L74">74</span>
<span id="L75" rel="#L75">75</span>
<span id="L76" rel="#L76">76</span>
<span id="L77" rel="#L77">77</span>
<span id="L78" rel="#L78">78</span>
<span id="L79" rel="#L79">79</span>
<span id="L80" rel="#L80">80</span>
<span id="L81" rel="#L81">81</span>
<span id="L82" rel="#L82">82</span>
<span id="L83" rel="#L83">83</span>
<span id="L84" rel="#L84">84</span>
<span id="L85" rel="#L85">85</span>
<span id="L86" rel="#L86">86</span>
<span id="L87" rel="#L87">87</span>
<span id="L88" rel="#L88">88</span>
<span id="L89" rel="#L89">89</span>
<span id="L90" rel="#L90">90</span>
<span id="L91" rel="#L91">91</span>
<span id="L92" rel="#L92">92</span>
<span id="L93" rel="#L93">93</span>
<span id="L94" rel="#L94">94</span>
<span id="L95" rel="#L95">95</span>
<span id="L96" rel="#L96">96</span>
<span id="L97" rel="#L97">97</span>
<span id="L98" rel="#L98">98</span>
<span id="L99" rel="#L99">99</span>
<span id="L100" rel="#L100">100</span>
<span id="L101" rel="#L101">101</span>
<span id="L102" rel="#L102">102</span>
<span id="L103" rel="#L103">103</span>
<span id="L104" rel="#L104">104</span>
<span id="L105" rel="#L105">105</span>
<span id="L106" rel="#L106">106</span>
<span id="L107" rel="#L107">107</span>
<span id="L108" rel="#L108">108</span>
<span id="L109" rel="#L109">109</span>
<span id="L110" rel="#L110">110</span>
<span id="L111" rel="#L111">111</span>
<span id="L112" rel="#L112">112</span>
<span id="L113" rel="#L113">113</span>
<span id="L114" rel="#L114">114</span>
<span id="L115" rel="#L115">115</span>
<span id="L116" rel="#L116">116</span>
<span id="L117" rel="#L117">117</span>
<span id="L118" rel="#L118">118</span>
<span id="L119" rel="#L119">119</span>
<span id="L120" rel="#L120">120</span>
<span id="L121" rel="#L121">121</span>
<span id="L122" rel="#L122">122</span>
<span id="L123" rel="#L123">123</span>
<span id="L124" rel="#L124">124</span>
<span id="L125" rel="#L125">125</span>
<span id="L126" rel="#L126">126</span>
<span id="L127" rel="#L127">127</span>
<span id="L128" rel="#L128">128</span>
<span id="L129" rel="#L129">129</span>
<span id="L130" rel="#L130">130</span>
<span id="L131" rel="#L131">131</span>
<span id="L132" rel="#L132">132</span>
<span id="L133" rel="#L133">133</span>
<span id="L134" rel="#L134">134</span>
<span id="L135" rel="#L135">135</span>
<span id="L136" rel="#L136">136</span>
<span id="L137" rel="#L137">137</span>
<span id="L138" rel="#L138">138</span>
<span id="L139" rel="#L139">139</span>
<span id="L140" rel="#L140">140</span>
<span id="L141" rel="#L141">141</span>
<span id="L142" rel="#L142">142</span>
<span id="L143" rel="#L143">143</span>
<span id="L144" rel="#L144">144</span>
<span id="L145" rel="#L145">145</span>
<span id="L146" rel="#L146">146</span>
<span id="L147" rel="#L147">147</span>
<span id="L148" rel="#L148">148</span>
<span id="L149" rel="#L149">149</span>
<span id="L150" rel="#L150">150</span>
<span id="L151" rel="#L151">151</span>
<span id="L152" rel="#L152">152</span>
<span id="L153" rel="#L153">153</span>
<span id="L154" rel="#L154">154</span>
<span id="L155" rel="#L155">155</span>
<span id="L156" rel="#L156">156</span>
<span id="L157" rel="#L157">157</span>
<span id="L158" rel="#L158">158</span>
<span id="L159" rel="#L159">159</span>
<span id="L160" rel="#L160">160</span>
<span id="L161" rel="#L161">161</span>
<span id="L162" rel="#L162">162</span>
<span id="L163" rel="#L163">163</span>
<span id="L164" rel="#L164">164</span>
<span id="L165" rel="#L165">165</span>
<span id="L166" rel="#L166">166</span>
<span id="L167" rel="#L167">167</span>
<span id="L168" rel="#L168">168</span>
<span id="L169" rel="#L169">169</span>
<span id="L170" rel="#L170">170</span>
<span id="L171" rel="#L171">171</span>
<span id="L172" rel="#L172">172</span>
<span id="L173" rel="#L173">173</span>
<span id="L174" rel="#L174">174</span>
<span id="L175" rel="#L175">175</span>
<span id="L176" rel="#L176">176</span>
<span id="L177" rel="#L177">177</span>
<span id="L178" rel="#L178">178</span>
<span id="L179" rel="#L179">179</span>
<span id="L180" rel="#L180">180</span>
<span id="L181" rel="#L181">181</span>
<span id="L182" rel="#L182">182</span>
<span id="L183" rel="#L183">183</span>
<span id="L184" rel="#L184">184</span>
<span id="L185" rel="#L185">185</span>
<span id="L186" rel="#L186">186</span>
<span id="L187" rel="#L187">187</span>
<span id="L188" rel="#L188">188</span>
<span id="L189" rel="#L189">189</span>
<span id="L190" rel="#L190">190</span>
<span id="L191" rel="#L191">191</span>
<span id="L192" rel="#L192">192</span>
<span id="L193" rel="#L193">193</span>
<span id="L194" rel="#L194">194</span>
<span id="L195" rel="#L195">195</span>
<span id="L196" rel="#L196">196</span>
<span id="L197" rel="#L197">197</span>
<span id="L198" rel="#L198">198</span>
<span id="L199" rel="#L199">199</span>
<span id="L200" rel="#L200">200</span>
<span id="L201" rel="#L201">201</span>
<span id="L202" rel="#L202">202</span>
<span id="L203" rel="#L203">203</span>
<span id="L204" rel="#L204">204</span>
<span id="L205" rel="#L205">205</span>
<span id="L206" rel="#L206">206</span>
<span id="L207" rel="#L207">207</span>
<span id="L208" rel="#L208">208</span>
<span id="L209" rel="#L209">209</span>
<span id="L210" rel="#L210">210</span>
<span id="L211" rel="#L211">211</span>
<span id="L212" rel="#L212">212</span>
<span id="L213" rel="#L213">213</span>
<span id="L214" rel="#L214">214</span>
<span id="L215" rel="#L215">215</span>
<span id="L216" rel="#L216">216</span>
<span id="L217" rel="#L217">217</span>
<span id="L218" rel="#L218">218</span>
<span id="L219" rel="#L219">219</span>
<span id="L220" rel="#L220">220</span>
<span id="L221" rel="#L221">221</span>
<span id="L222" rel="#L222">222</span>
<span id="L223" rel="#L223">223</span>
<span id="L224" rel="#L224">224</span>
<span id="L225" rel="#L225">225</span>
<span id="L226" rel="#L226">226</span>
<span id="L227" rel="#L227">227</span>
<span id="L228" rel="#L228">228</span>
<span id="L229" rel="#L229">229</span>
<span id="L230" rel="#L230">230</span>
<span id="L231" rel="#L231">231</span>
<span id="L232" rel="#L232">232</span>
<span id="L233" rel="#L233">233</span>
<span id="L234" rel="#L234">234</span>
<span id="L235" rel="#L235">235</span>
<span id="L236" rel="#L236">236</span>
<span id="L237" rel="#L237">237</span>
<span id="L238" rel="#L238">238</span>
<span id="L239" rel="#L239">239</span>
<span id="L240" rel="#L240">240</span>
<span id="L241" rel="#L241">241</span>
<span id="L242" rel="#L242">242</span>
<span id="L243" rel="#L243">243</span>
<span id="L244" rel="#L244">244</span>
<span id="L245" rel="#L245">245</span>
<span id="L246" rel="#L246">246</span>
<span id="L247" rel="#L247">247</span>
<span id="L248" rel="#L248">248</span>
<span id="L249" rel="#L249">249</span>
<span id="L250" rel="#L250">250</span>
<span id="L251" rel="#L251">251</span>
<span id="L252" rel="#L252">252</span>
<span id="L253" rel="#L253">253</span>
<span id="L254" rel="#L254">254</span>
<span id="L255" rel="#L255">255</span>
<span id="L256" rel="#L256">256</span>
<span id="L257" rel="#L257">257</span>
<span id="L258" rel="#L258">258</span>
<span id="L259" rel="#L259">259</span>
<span id="L260" rel="#L260">260</span>
<span id="L261" rel="#L261">261</span>
<span id="L262" rel="#L262">262</span>
<span id="L263" rel="#L263">263</span>
<span id="L264" rel="#L264">264</span>
<span id="L265" rel="#L265">265</span>
<span id="L266" rel="#L266">266</span>
<span id="L267" rel="#L267">267</span>
<span id="L268" rel="#L268">268</span>
<span id="L269" rel="#L269">269</span>
<span id="L270" rel="#L270">270</span>
<span id="L271" rel="#L271">271</span>
<span id="L272" rel="#L272">272</span>
<span id="L273" rel="#L273">273</span>
<span id="L274" rel="#L274">274</span>
<span id="L275" rel="#L275">275</span>
<span id="L276" rel="#L276">276</span>
<span id="L277" rel="#L277">277</span>
<span id="L278" rel="#L278">278</span>
<span id="L279" rel="#L279">279</span>
<span id="L280" rel="#L280">280</span>
<span id="L281" rel="#L281">281</span>
<span id="L282" rel="#L282">282</span>
<span id="L283" rel="#L283">283</span>
<span id="L284" rel="#L284">284</span>
<span id="L285" rel="#L285">285</span>
<span id="L286" rel="#L286">286</span>
<span id="L287" rel="#L287">287</span>
<span id="L288" rel="#L288">288</span>
<span id="L289" rel="#L289">289</span>
<span id="L290" rel="#L290">290</span>
<span id="L291" rel="#L291">291</span>
<span id="L292" rel="#L292">292</span>
<span id="L293" rel="#L293">293</span>
<span id="L294" rel="#L294">294</span>
<span id="L295" rel="#L295">295</span>
<span id="L296" rel="#L296">296</span>
<span id="L297" rel="#L297">297</span>
<span id="L298" rel="#L298">298</span>
<span id="L299" rel="#L299">299</span>
<span id="L300" rel="#L300">300</span>
<span id="L301" rel="#L301">301</span>
<span id="L302" rel="#L302">302</span>
<span id="L303" rel="#L303">303</span>
<span id="L304" rel="#L304">304</span>
<span id="L305" rel="#L305">305</span>
<span id="L306" rel="#L306">306</span>
<span id="L307" rel="#L307">307</span>
<span id="L308" rel="#L308">308</span>
<span id="L309" rel="#L309">309</span>
<span id="L310" rel="#L310">310</span>
<span id="L311" rel="#L311">311</span>
<span id="L312" rel="#L312">312</span>
<span id="L313" rel="#L313">313</span>
<span id="L314" rel="#L314">314</span>
<span id="L315" rel="#L315">315</span>
<span id="L316" rel="#L316">316</span>
<span id="L317" rel="#L317">317</span>
<span id="L318" rel="#L318">318</span>
<span id="L319" rel="#L319">319</span>
<span id="L320" rel="#L320">320</span>
<span id="L321" rel="#L321">321</span>
<span id="L322" rel="#L322">322</span>
<span id="L323" rel="#L323">323</span>
<span id="L324" rel="#L324">324</span>
<span id="L325" rel="#L325">325</span>
<span id="L326" rel="#L326">326</span>
<span id="L327" rel="#L327">327</span>
<span id="L328" rel="#L328">328</span>
<span id="L329" rel="#L329">329</span>
<span id="L330" rel="#L330">330</span>
<span id="L331" rel="#L331">331</span>
<span id="L332" rel="#L332">332</span>
<span id="L333" rel="#L333">333</span>
<span id="L334" rel="#L334">334</span>
<span id="L335" rel="#L335">335</span>
<span id="L336" rel="#L336">336</span>
<span id="L337" rel="#L337">337</span>
<span id="L338" rel="#L338">338</span>
<span id="L339" rel="#L339">339</span>
<span id="L340" rel="#L340">340</span>
<span id="L341" rel="#L341">341</span>
<span id="L342" rel="#L342">342</span>
<span id="L343" rel="#L343">343</span>
<span id="L344" rel="#L344">344</span>
<span id="L345" rel="#L345">345</span>
<span id="L346" rel="#L346">346</span>
<span id="L347" rel="#L347">347</span>
<span id="L348" rel="#L348">348</span>
<span id="L349" rel="#L349">349</span>
<span id="L350" rel="#L350">350</span>
<span id="L351" rel="#L351">351</span>
<span id="L352" rel="#L352">352</span>
<span id="L353" rel="#L353">353</span>
<span id="L354" rel="#L354">354</span>
<span id="L355" rel="#L355">355</span>
<span id="L356" rel="#L356">356</span>
<span id="L357" rel="#L357">357</span>
<span id="L358" rel="#L358">358</span>
<span id="L359" rel="#L359">359</span>
<span id="L360" rel="#L360">360</span>
<span id="L361" rel="#L361">361</span>
<span id="L362" rel="#L362">362</span>
<span id="L363" rel="#L363">363</span>
<span id="L364" rel="#L364">364</span>
<span id="L365" rel="#L365">365</span>
<span id="L366" rel="#L366">366</span>
<span id="L367" rel="#L367">367</span>
<span id="L368" rel="#L368">368</span>
<span id="L369" rel="#L369">369</span>
<span id="L370" rel="#L370">370</span>
<span id="L371" rel="#L371">371</span>
<span id="L372" rel="#L372">372</span>
<span id="L373" rel="#L373">373</span>
<span id="L374" rel="#L374">374</span>
<span id="L375" rel="#L375">375</span>
<span id="L376" rel="#L376">376</span>
<span id="L377" rel="#L377">377</span>
<span id="L378" rel="#L378">378</span>
<span id="L379" rel="#L379">379</span>
<span id="L380" rel="#L380">380</span>
<span id="L381" rel="#L381">381</span>
<span id="L382" rel="#L382">382</span>
<span id="L383" rel="#L383">383</span>
<span id="L384" rel="#L384">384</span>
<span id="L385" rel="#L385">385</span>
<span id="L386" rel="#L386">386</span>
<span id="L387" rel="#L387">387</span>
<span id="L388" rel="#L388">388</span>
<span id="L389" rel="#L389">389</span>
<span id="L390" rel="#L390">390</span>
<span id="L391" rel="#L391">391</span>
<span id="L392" rel="#L392">392</span>
<span id="L393" rel="#L393">393</span>
<span id="L394" rel="#L394">394</span>
<span id="L395" rel="#L395">395</span>
<span id="L396" rel="#L396">396</span>
<span id="L397" rel="#L397">397</span>
<span id="L398" rel="#L398">398</span>
<span id="L399" rel="#L399">399</span>
<span id="L400" rel="#L400">400</span>
<span id="L401" rel="#L401">401</span>
<span id="L402" rel="#L402">402</span>
<span id="L403" rel="#L403">403</span>
<span id="L404" rel="#L404">404</span>
<span id="L405" rel="#L405">405</span>
<span id="L406" rel="#L406">406</span>
<span id="L407" rel="#L407">407</span>
<span id="L408" rel="#L408">408</span>
<span id="L409" rel="#L409">409</span>
<span id="L410" rel="#L410">410</span>
<span id="L411" rel="#L411">411</span>
<span id="L412" rel="#L412">412</span>
<span id="L413" rel="#L413">413</span>
<span id="L414" rel="#L414">414</span>
<span id="L415" rel="#L415">415</span>
<span id="L416" rel="#L416">416</span>
<span id="L417" rel="#L417">417</span>
<span id="L418" rel="#L418">418</span>
<span id="L419" rel="#L419">419</span>
<span id="L420" rel="#L420">420</span>
<span id="L421" rel="#L421">421</span>
<span id="L422" rel="#L422">422</span>
<span id="L423" rel="#L423">423</span>
<span id="L424" rel="#L424">424</span>
<span id="L425" rel="#L425">425</span>
<span id="L426" rel="#L426">426</span>
<span id="L427" rel="#L427">427</span>
<span id="L428" rel="#L428">428</span>
<span id="L429" rel="#L429">429</span>
<span id="L430" rel="#L430">430</span>
<span id="L431" rel="#L431">431</span>
<span id="L432" rel="#L432">432</span>
<span id="L433" rel="#L433">433</span>
<span id="L434" rel="#L434">434</span>
<span id="L435" rel="#L435">435</span>
<span id="L436" rel="#L436">436</span>
<span id="L437" rel="#L437">437</span>
<span id="L438" rel="#L438">438</span>
<span id="L439" rel="#L439">439</span>
<span id="L440" rel="#L440">440</span>
<span id="L441" rel="#L441">441</span>
<span id="L442" rel="#L442">442</span>
<span id="L443" rel="#L443">443</span>
<span id="L444" rel="#L444">444</span>
<span id="L445" rel="#L445">445</span>
<span id="L446" rel="#L446">446</span>
<span id="L447" rel="#L447">447</span>
<span id="L448" rel="#L448">448</span>
<span id="L449" rel="#L449">449</span>
<span id="L450" rel="#L450">450</span>
<span id="L451" rel="#L451">451</span>
<span id="L452" rel="#L452">452</span>
<span id="L453" rel="#L453">453</span>
<span id="L454" rel="#L454">454</span>
<span id="L455" rel="#L455">455</span>
<span id="L456" rel="#L456">456</span>
<span id="L457" rel="#L457">457</span>
<span id="L458" rel="#L458">458</span>
<span id="L459" rel="#L459">459</span>
<span id="L460" rel="#L460">460</span>
<span id="L461" rel="#L461">461</span>
<span id="L462" rel="#L462">462</span>
<span id="L463" rel="#L463">463</span>
<span id="L464" rel="#L464">464</span>
<span id="L465" rel="#L465">465</span>
<span id="L466" rel="#L466">466</span>
<span id="L467" rel="#L467">467</span>
<span id="L468" rel="#L468">468</span>
<span id="L469" rel="#L469">469</span>
<span id="L470" rel="#L470">470</span>
<span id="L471" rel="#L471">471</span>
<span id="L472" rel="#L472">472</span>
<span id="L473" rel="#L473">473</span>
<span id="L474" rel="#L474">474</span>
<span id="L475" rel="#L475">475</span>
<span id="L476" rel="#L476">476</span>
<span id="L477" rel="#L477">477</span>
<span id="L478" rel="#L478">478</span>
<span id="L479" rel="#L479">479</span>
<span id="L480" rel="#L480">480</span>
<span id="L481" rel="#L481">481</span>
<span id="L482" rel="#L482">482</span>
<span id="L483" rel="#L483">483</span>
<span id="L484" rel="#L484">484</span>
<span id="L485" rel="#L485">485</span>
<span id="L486" rel="#L486">486</span>
<span id="L487" rel="#L487">487</span>
<span id="L488" rel="#L488">488</span>
<span id="L489" rel="#L489">489</span>
<span id="L490" rel="#L490">490</span>
<span id="L491" rel="#L491">491</span>
<span id="L492" rel="#L492">492</span>
<span id="L493" rel="#L493">493</span>
<span id="L494" rel="#L494">494</span>
<span id="L495" rel="#L495">495</span>
<span id="L496" rel="#L496">496</span>
<span id="L497" rel="#L497">497</span>
<span id="L498" rel="#L498">498</span>
<span id="L499" rel="#L499">499</span>
<span id="L500" rel="#L500">500</span>
<span id="L501" rel="#L501">501</span>
<span id="L502" rel="#L502">502</span>
<span id="L503" rel="#L503">503</span>
<span id="L504" rel="#L504">504</span>
<span id="L505" rel="#L505">505</span>
<span id="L506" rel="#L506">506</span>
<span id="L507" rel="#L507">507</span>
<span id="L508" rel="#L508">508</span>
<span id="L509" rel="#L509">509</span>
<span id="L510" rel="#L510">510</span>
<span id="L511" rel="#L511">511</span>
<span id="L512" rel="#L512">512</span>
<span id="L513" rel="#L513">513</span>
<span id="L514" rel="#L514">514</span>
<span id="L515" rel="#L515">515</span>
<span id="L516" rel="#L516">516</span>
<span id="L517" rel="#L517">517</span>
<span id="L518" rel="#L518">518</span>
<span id="L519" rel="#L519">519</span>
<span id="L520" rel="#L520">520</span>
<span id="L521" rel="#L521">521</span>
<span id="L522" rel="#L522">522</span>
<span id="L523" rel="#L523">523</span>
<span id="L524" rel="#L524">524</span>
<span id="L525" rel="#L525">525</span>
<span id="L526" rel="#L526">526</span>
<span id="L527" rel="#L527">527</span>
<span id="L528" rel="#L528">528</span>
<span id="L529" rel="#L529">529</span>
<span id="L530" rel="#L530">530</span>
<span id="L531" rel="#L531">531</span>
<span id="L532" rel="#L532">532</span>
<span id="L533" rel="#L533">533</span>
<span id="L534" rel="#L534">534</span>
<span id="L535" rel="#L535">535</span>
<span id="L536" rel="#L536">536</span>
<span id="L537" rel="#L537">537</span>
<span id="L538" rel="#L538">538</span>
<span id="L539" rel="#L539">539</span>
<span id="L540" rel="#L540">540</span>
<span id="L541" rel="#L541">541</span>
<span id="L542" rel="#L542">542</span>
<span id="L543" rel="#L543">543</span>
<span id="L544" rel="#L544">544</span>
<span id="L545" rel="#L545">545</span>
<span id="L546" rel="#L546">546</span>
<span id="L547" rel="#L547">547</span>
<span id="L548" rel="#L548">548</span>
<span id="L549" rel="#L549">549</span>
<span id="L550" rel="#L550">550</span>
<span id="L551" rel="#L551">551</span>
<span id="L552" rel="#L552">552</span>
<span id="L553" rel="#L553">553</span>
<span id="L554" rel="#L554">554</span>
<span id="L555" rel="#L555">555</span>
<span id="L556" rel="#L556">556</span>
<span id="L557" rel="#L557">557</span>
<span id="L558" rel="#L558">558</span>
<span id="L559" rel="#L559">559</span>
<span id="L560" rel="#L560">560</span>
<span id="L561" rel="#L561">561</span>
<span id="L562" rel="#L562">562</span>
<span id="L563" rel="#L563">563</span>
<span id="L564" rel="#L564">564</span>
<span id="L565" rel="#L565">565</span>
<span id="L566" rel="#L566">566</span>
<span id="L567" rel="#L567">567</span>
<span id="L568" rel="#L568">568</span>
<span id="L569" rel="#L569">569</span>
<span id="L570" rel="#L570">570</span>
<span id="L571" rel="#L571">571</span>
<span id="L572" rel="#L572">572</span>
<span id="L573" rel="#L573">573</span>
<span id="L574" rel="#L574">574</span>
<span id="L575" rel="#L575">575</span>
<span id="L576" rel="#L576">576</span>
<span id="L577" rel="#L577">577</span>
<span id="L578" rel="#L578">578</span>
<span id="L579" rel="#L579">579</span>
<span id="L580" rel="#L580">580</span>
<span id="L581" rel="#L581">581</span>
<span id="L582" rel="#L582">582</span>
<span id="L583" rel="#L583">583</span>
<span id="L584" rel="#L584">584</span>
<span id="L585" rel="#L585">585</span>
<span id="L586" rel="#L586">586</span>
<span id="L587" rel="#L587">587</span>
<span id="L588" rel="#L588">588</span>
<span id="L589" rel="#L589">589</span>
<span id="L590" rel="#L590">590</span>
<span id="L591" rel="#L591">591</span>
<span id="L592" rel="#L592">592</span>
<span id="L593" rel="#L593">593</span>
<span id="L594" rel="#L594">594</span>
<span id="L595" rel="#L595">595</span>
<span id="L596" rel="#L596">596</span>
<span id="L597" rel="#L597">597</span>
<span id="L598" rel="#L598">598</span>
<span id="L599" rel="#L599">599</span>
<span id="L600" rel="#L600">600</span>
<span id="L601" rel="#L601">601</span>
<span id="L602" rel="#L602">602</span>
<span id="L603" rel="#L603">603</span>
<span id="L604" rel="#L604">604</span>
<span id="L605" rel="#L605">605</span>
<span id="L606" rel="#L606">606</span>
<span id="L607" rel="#L607">607</span>
<span id="L608" rel="#L608">608</span>
<span id="L609" rel="#L609">609</span>
<span id="L610" rel="#L610">610</span>
<span id="L611" rel="#L611">611</span>
<span id="L612" rel="#L612">612</span>
<span id="L613" rel="#L613">613</span>
<span id="L614" rel="#L614">614</span>
<span id="L615" rel="#L615">615</span>
<span id="L616" rel="#L616">616</span>
<span id="L617" rel="#L617">617</span>
<span id="L618" rel="#L618">618</span>
<span id="L619" rel="#L619">619</span>
<span id="L620" rel="#L620">620</span>
<span id="L621" rel="#L621">621</span>

            </td>
            <td class="blob-line-code">
                    <div class="highlight"><pre><div class='line' id='LC1'><span class="o">&lt;?</span><span class="nx">php</span></div><div class='line' id='LC2'><br/></div><div class='line' id='LC3'><span class="nb">defined</span><span class="p">(</span><span class="s1">&#39;_JEXEC&#39;</span><span class="p">)</span> <span class="k">or</span> <span class="k">die</span><span class="p">(</span><span class="s1">&#39;Direct Access to &#39;</span> <span class="o">.</span> <span class="nb">basename</span><span class="p">(</span><span class="k">__FILE__</span><span class="p">)</span> <span class="o">.</span> <span class="s1">&#39; is not allowed.&#39;</span><span class="p">);</span></div><div class='line' id='LC4'><br/></div><div class='line' id='LC5'><span class="sd">/**</span></div><div class='line' id='LC6'><span class="sd"> *</span></div><div class='line' id='LC7'><span class="sd"> * @author Craig Christenson</span></div><div class='line' id='LC8'><span class="sd"> * @version $Id: tco.php$</span></div><div class='line' id='LC9'><span class="sd"> * @package VirtueMart</span></div><div class='line' id='LC10'><span class="sd"> * @subpackage payment</span></div><div class='line' id='LC11'><span class="sd"> * @copyright Copyright (C) 2004-2008 soeren - All rights reserved.</span></div><div class='line' id='LC12'><span class="sd"> * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php</span></div><div class='line' id='LC13'><span class="sd"> * VirtueMart is free software. This version may have been modified pursuant</span></div><div class='line' id='LC14'><span class="sd"> * to the GNU General Public License, and as distributed it includes or</span></div><div class='line' id='LC15'><span class="sd"> * is derivative of works licensed under the GNU General Public License or</span></div><div class='line' id='LC16'><span class="sd"> * other free or open source software licenses.</span></div><div class='line' id='LC17'><span class="sd"> * See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.</span></div><div class='line' id='LC18'><span class="sd"> *</span></div><div class='line' id='LC19'><span class="sd"> * http://virtuemart.org</span></div><div class='line' id='LC20'><span class="sd"> */</span></div><div class='line' id='LC21'><span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nb">class_exists</span><span class="p">(</span><span class="s1">&#39;vmPSPlugin&#39;</span><span class="p">))</span></div><div class='line' id='LC22'><span class="k">require</span><span class="p">(</span><span class="nx">JPATH_VM_PLUGINS</span> <span class="o">.</span> <span class="nx">DS</span> <span class="o">.</span> <span class="s1">&#39;vmpsplugin.php&#39;</span><span class="p">);</span></div><div class='line' id='LC23'><br/></div><div class='line' id='LC24'><span class="k">class</span> <span class="nc">plgVmPaymentTco</span> <span class="k">extends</span> <span class="nx">vmPSPlugin</span> <span class="p">{</span></div><div class='line' id='LC25'><br/></div><div class='line' id='LC26'>	<span class="k">public</span> <span class="k">static</span> <span class="nv">$_this</span> <span class="o">=</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC27'><br/></div><div class='line' id='LC28'>	<span class="k">function</span> <span class="nf">__construct</span><span class="p">(</span><span class="o">&amp;</span> <span class="nv">$subject</span><span class="p">,</span> <span class="nv">$config</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC29'><br/></div><div class='line' id='LC30'>		<span class="k">parent</span><span class="o">::</span><span class="na">__construct</span><span class="p">(</span><span class="nv">$subject</span><span class="p">,</span> <span class="nv">$config</span><span class="p">);</span></div><div class='line' id='LC31'><br/></div><div class='line' id='LC32'>		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">_loggable</span> <span class="o">=</span> <span class="k">true</span><span class="p">;</span></div><div class='line' id='LC33'>		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">tableFields</span> <span class="o">=</span> <span class="nb">array_keys</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getTableSQLFields</span><span class="p">());</span></div><div class='line' id='LC34'><br/></div><div class='line' id='LC35'>		<span class="nv">$varsToPush</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span><span class="s1">&#39;tco_seller_id&#39;</span> <span class="o">=&gt;</span> <span class="k">array</span><span class="p">(</span><span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="s1">&#39;char&#39;</span><span class="p">),</span></div><div class='line' id='LC36'>	    <span class="s1">&#39;tco_secret_word&#39;</span> <span class="o">=&gt;</span> <span class="k">array</span><span class="p">(</span><span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="s1">&#39;char&#39;</span><span class="p">),</span></div><div class='line' id='LC37'>	    <span class="s1">&#39;payment_currency&#39;</span> <span class="o">=&gt;</span> <span class="k">array</span><span class="p">(</span><span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="s1">&#39;int&#39;</span><span class="p">),</span></div><div class='line' id='LC38'>	    <span class="s1">&#39;payment_logos&#39;</span> <span class="o">=&gt;</span> <span class="k">array</span><span class="p">(</span><span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="s1">&#39;char&#39;</span><span class="p">),</span></div><div class='line' id='LC39'>	    <span class="s1">&#39;sandbox&#39;</span> <span class="o">=&gt;</span> <span class="k">array</span><span class="p">(</span><span class="mi">0</span><span class="p">,</span> <span class="s1">&#39;char&#39;</span><span class="p">),</span></div><div class='line' id='LC40'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;direct_checkout&#39;</span> <span class="o">=&gt;</span> <span class="k">array</span><span class="p">(</span><span class="mi">0</span><span class="p">,</span> <span class="s1">&#39;char&#39;</span><span class="p">),</span></div><div class='line' id='LC41'>	    <span class="s1">&#39;debug&#39;</span> <span class="o">=&gt;</span> <span class="k">array</span><span class="p">(</span><span class="mi">0</span><span class="p">,</span> <span class="s1">&#39;int&#39;</span><span class="p">),</span></div><div class='line' id='LC42'>	    <span class="s1">&#39;status_pending&#39;</span> <span class="o">=&gt;</span> <span class="k">array</span><span class="p">(</span><span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="s1">&#39;char&#39;</span><span class="p">),</span></div><div class='line' id='LC43'>	    <span class="s1">&#39;status_success&#39;</span> <span class="o">=&gt;</span> <span class="k">array</span><span class="p">(</span><span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="s1">&#39;char&#39;</span><span class="p">),</span></div><div class='line' id='LC44'>	    <span class="s1">&#39;status_canceled&#39;</span> <span class="o">=&gt;</span> <span class="k">array</span><span class="p">(</span><span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="s1">&#39;char&#39;</span><span class="p">),</span></div><div class='line' id='LC45'>	    <span class="s1">&#39;countries&#39;</span> <span class="o">=&gt;</span> <span class="k">array</span><span class="p">(</span><span class="mi">0</span><span class="p">,</span> <span class="s1">&#39;char&#39;</span><span class="p">),</span></div><div class='line' id='LC46'>	    <span class="s1">&#39;min_amount&#39;</span> <span class="o">=&gt;</span> <span class="k">array</span><span class="p">(</span><span class="mi">0</span><span class="p">,</span> <span class="s1">&#39;int&#39;</span><span class="p">),</span></div><div class='line' id='LC47'>	    <span class="s1">&#39;max_amount&#39;</span> <span class="o">=&gt;</span> <span class="k">array</span><span class="p">(</span><span class="mi">0</span><span class="p">,</span> <span class="s1">&#39;int&#39;</span><span class="p">),</span></div><div class='line' id='LC48'>	    <span class="s1">&#39;cost_per_transaction&#39;</span> <span class="o">=&gt;</span> <span class="k">array</span><span class="p">(</span><span class="mi">0</span><span class="p">,</span> <span class="s1">&#39;int&#39;</span><span class="p">),</span></div><div class='line' id='LC49'>	    <span class="s1">&#39;cost_percent_total&#39;</span> <span class="o">=&gt;</span> <span class="k">array</span><span class="p">(</span><span class="mi">0</span><span class="p">,</span> <span class="s1">&#39;int&#39;</span><span class="p">),</span></div><div class='line' id='LC50'>	    <span class="s1">&#39;tax_id&#39;</span> <span class="o">=&gt;</span> <span class="k">array</span><span class="p">(</span><span class="mi">0</span><span class="p">,</span> <span class="s1">&#39;int&#39;</span><span class="p">)</span></div><div class='line' id='LC51'>		<span class="p">);</span></div><div class='line' id='LC52'><br/></div><div class='line' id='LC53'>		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">setConfigParameterable</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">_configTableFieldName</span><span class="p">,</span> <span class="nv">$varsToPush</span><span class="p">);</span></div><div class='line' id='LC54'><br/></div><div class='line' id='LC55'>	<span class="p">}</span></div><div class='line' id='LC56'><br/></div><div class='line' id='LC57'>	<span class="k">function</span> <span class="nf">_getTcoDetails</span><span class="p">(</span><span class="nv">$method</span><span class="p">)</span></div><div class='line' id='LC58'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC59'>&nbsp;&nbsp;&nbsp;&nbsp;	<span class="nv">$tcoDetails</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span></div><div class='line' id='LC60'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;seller_id&#39;</span> <span class="o">=&gt;</span> <span class="nv">$method</span><span class="o">-&gt;</span><span class="na">tco_seller_id</span><span class="p">,</span></div><div class='line' id='LC61'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;secret_word&#39;</span> <span class="o">=&gt;</span> <span class="nv">$method</span><span class="o">-&gt;</span><span class="na">tco_secret_word</span><span class="p">,</span></div><div class='line' id='LC62'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;url&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;https://www.2checkout.com/checkout/spurchase&#39;</span></div><div class='line' id='LC63'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC64'><br/></div><div class='line' id='LC65'>&nbsp;&nbsp;&nbsp;&nbsp;	<span class="k">return</span> <span class="nv">$tcoDetails</span><span class="p">;</span></div><div class='line' id='LC66'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC67'><br/></div><div class='line' id='LC68'>	<span class="k">public</span> <span class="k">function</span> <span class="nf">getVmPluginCreateTableSQL</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC69'><br/></div><div class='line' id='LC70'>		<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">createTableSQL</span><span class="p">(</span><span class="s1">&#39;Payment 2Checkout Table&#39;</span><span class="p">);</span></div><div class='line' id='LC71'>	<span class="p">}</span></div><div class='line' id='LC72'><br/></div><div class='line' id='LC73'>	<span class="k">function</span> <span class="nf">getTableSQLFields</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC74'><br/></div><div class='line' id='LC75'>		<span class="nv">$SQLfields</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span></div><div class='line' id='LC76'>	    <span class="s1">&#39;id&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39; INT(11) unsigned NOT NULL AUTO_INCREMENT &#39;</span><span class="p">,</span></div><div class='line' id='LC77'>	    <span class="s1">&#39;virtuemart_order_id&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39; int(11) UNSIGNED DEFAULT NULL&#39;</span><span class="p">,</span></div><div class='line' id='LC78'>	    <span class="s1">&#39;order_number&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39; char(32) DEFAULT NULL&#39;</span><span class="p">,</span></div><div class='line' id='LC79'>	    <span class="s1">&#39;virtuemart_paymentmethod_id&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39; mediumint(1) UNSIGNED DEFAULT NULL&#39;</span><span class="p">,</span></div><div class='line' id='LC80'>	    <span class="s1">&#39;payment_name&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39; char(255) NOT NULL DEFAULT \&#39;\&#39; &#39;</span><span class="p">,</span></div><div class='line' id='LC81'>	    <span class="s1">&#39;payment_order_total&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;decimal(15,5) NOT NULL DEFAULT \&#39;0.00000\&#39; &#39;</span><span class="p">,</span></div><div class='line' id='LC82'>	    <span class="s1">&#39;payment_currency&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;char(3) &#39;</span><span class="p">,</span></div><div class='line' id='LC83'>	    <span class="s1">&#39;cost_per_transaction&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39; decimal(10,2) DEFAULT NULL &#39;</span><span class="p">,</span></div><div class='line' id='LC84'>	    <span class="s1">&#39;cost_percent_total&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39; decimal(10,2) DEFAULT NULL &#39;</span><span class="p">,</span></div><div class='line' id='LC85'>	    <span class="s1">&#39;tax_id&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39; smallint(1) DEFAULT NULL&#39;</span><span class="p">,</span></div><div class='line' id='LC86'>	    <span class="s1">&#39;tco_response&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39; varchar(255)  &#39;</span><span class="p">,</span></div><div class='line' id='LC87'>	    <span class="s1">&#39;tco_response_payment_date&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39; char(28) DEFAULT NULL&#39;</span></div><div class='line' id='LC88'>		<span class="p">);</span></div><div class='line' id='LC89'>		<span class="k">return</span> <span class="nv">$SQLfields</span><span class="p">;</span></div><div class='line' id='LC90'>	<span class="p">}</span></div><div class='line' id='LC91'><br/></div><div class='line' id='LC92'>	<span class="k">function</span> <span class="nf">plgVmConfirmedOrder</span><span class="p">(</span><span class="nv">$cart</span><span class="p">,</span> <span class="nv">$order</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC93'><br/></div><div class='line' id='LC94'>		<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="p">(</span><span class="nv">$method</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getVmPluginMethod</span><span class="p">(</span><span class="nv">$order</span><span class="p">[</span><span class="s1">&#39;details&#39;</span><span class="p">][</span><span class="s1">&#39;BT&#39;</span><span class="p">]</span><span class="o">-&gt;</span><span class="na">virtuemart_paymentmethod_id</span><span class="p">)))</span> <span class="p">{</span></div><div class='line' id='LC95'>			<span class="k">return</span> <span class="k">null</span><span class="p">;</span> <span class="c1">// Another method was selected, do nothing</span></div><div class='line' id='LC96'>		<span class="p">}</span></div><div class='line' id='LC97'>		<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">selectedThisElement</span><span class="p">(</span><span class="nv">$method</span><span class="o">-&gt;</span><span class="na">payment_element</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC98'>			<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC99'>		<span class="p">}</span></div><div class='line' id='LC100'>		<span class="nv">$session</span> <span class="o">=</span> <span class="nx">JFactory</span><span class="o">::</span><span class="na">getSession</span><span class="p">();</span></div><div class='line' id='LC101'>		<span class="nv">$return_context</span> <span class="o">=</span> <span class="nv">$session</span><span class="o">-&gt;</span><span class="na">getId</span><span class="p">();</span></div><div class='line' id='LC102'>		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">_debug</span> <span class="o">=</span> <span class="nv">$method</span><span class="o">-&gt;</span><span class="na">debug</span><span class="p">;</span></div><div class='line' id='LC103'><br/></div><div class='line' id='LC104'>		<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nb">class_exists</span><span class="p">(</span><span class="s1">&#39;VirtueMartModelOrders&#39;</span><span class="p">))</span></div><div class='line' id='LC105'>		<span class="k">require</span><span class="p">(</span> <span class="nx">JPATH_VM_ADMINISTRATOR</span> <span class="o">.</span> <span class="nx">DS</span> <span class="o">.</span> <span class="s1">&#39;models&#39;</span> <span class="o">.</span> <span class="nx">DS</span> <span class="o">.</span> <span class="s1">&#39;orders.php&#39;</span> <span class="p">);</span></div><div class='line' id='LC106'>		<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nb">class_exists</span><span class="p">(</span><span class="s1">&#39;VirtueMartModelCurrency&#39;</span><span class="p">))</span></div><div class='line' id='LC107'>		<span class="k">require</span><span class="p">(</span><span class="nx">JPATH_VM_ADMINISTRATOR</span> <span class="o">.</span> <span class="nx">DS</span> <span class="o">.</span> <span class="s1">&#39;models&#39;</span> <span class="o">.</span> <span class="nx">DS</span> <span class="o">.</span> <span class="s1">&#39;currency.php&#39;</span><span class="p">);</span></div><div class='line' id='LC108'><br/></div><div class='line' id='LC109'>		<span class="c1">//$usr = &amp; JFactory::getUser();</span></div><div class='line' id='LC110'>		<span class="nv">$new_status</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC111'><br/></div><div class='line' id='LC112'>		<span class="nv">$usrBT</span> <span class="o">=</span> <span class="nv">$order</span><span class="p">[</span><span class="s1">&#39;details&#39;</span><span class="p">][</span><span class="s1">&#39;BT&#39;</span><span class="p">];</span></div><div class='line' id='LC113'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$address</span> <span class="o">=</span> <span class="p">((</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$order</span><span class="p">[</span><span class="s1">&#39;details&#39;</span><span class="p">][</span><span class="s1">&#39;BT&#39;</span><span class="p">]))</span> <span class="o">?</span> <span class="nv">$order</span><span class="p">[</span><span class="s1">&#39;details&#39;</span><span class="p">][</span><span class="s1">&#39;BT&#39;</span><span class="p">]</span> <span class="o">:</span> <span class="nv">$order</span><span class="p">[</span><span class="s1">&#39;details&#39;</span><span class="p">][</span><span class="s1">&#39;ST&#39;</span><span class="p">]);</span></div><div class='line' id='LC114'><br/></div><div class='line' id='LC115'>		<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nb">class_exists</span><span class="p">(</span><span class="s1">&#39;TableVendors&#39;</span><span class="p">))</span></div><div class='line' id='LC116'>		<span class="k">require</span><span class="p">(</span><span class="nx">JPATH_VM_ADMINISTRATOR</span> <span class="o">.</span> <span class="nx">DS</span> <span class="o">.</span> <span class="s1">&#39;table&#39;</span> <span class="o">.</span> <span class="nx">DS</span> <span class="o">.</span> <span class="s1">&#39;vendors.php&#39;</span><span class="p">);</span></div><div class='line' id='LC117'>		<span class="nv">$vendorModel</span> <span class="o">=</span> <span class="nx">VmModel</span><span class="o">::</span><span class="na">getModel</span><span class="p">(</span><span class="s1">&#39;Vendor&#39;</span><span class="p">);</span></div><div class='line' id='LC118'>		<span class="nv">$vendorModel</span><span class="o">-&gt;</span><span class="na">setId</span><span class="p">(</span><span class="mi">1</span><span class="p">);</span></div><div class='line' id='LC119'>		<span class="nv">$vendor</span> <span class="o">=</span> <span class="nv">$vendorModel</span><span class="o">-&gt;</span><span class="na">getVendor</span><span class="p">();</span></div><div class='line' id='LC120'>		<span class="nv">$vendorModel</span><span class="o">-&gt;</span><span class="na">addImages</span><span class="p">(</span><span class="nv">$vendor</span><span class="p">,</span> <span class="mi">1</span><span class="p">);</span></div><div class='line' id='LC121'>		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getPaymentCurrency</span><span class="p">(</span><span class="nv">$method</span><span class="p">);</span></div><div class='line' id='LC122'>		<span class="nv">$q</span> <span class="o">=</span> <span class="s1">&#39;SELECT `currency_code_3` FROM `#__virtuemart_currencies` WHERE `virtuemart_currency_id`=&quot;&#39;</span> <span class="o">.</span> <span class="nv">$method</span><span class="o">-&gt;</span><span class="na">payment_currency</span> <span class="o">.</span> <span class="s1">&#39;&quot; &#39;</span><span class="p">;</span></div><div class='line' id='LC123'>		<span class="nv">$db</span> <span class="o">=</span> <span class="o">&amp;</span><span class="nx">JFactory</span><span class="o">::</span><span class="na">getDBO</span><span class="p">();</span></div><div class='line' id='LC124'>		<span class="nv">$db</span><span class="o">-&gt;</span><span class="na">setQuery</span><span class="p">(</span><span class="nv">$q</span><span class="p">);</span></div><div class='line' id='LC125'>		<span class="nv">$currency_code_3</span> <span class="o">=</span> <span class="nv">$db</span><span class="o">-&gt;</span><span class="na">loadResult</span><span class="p">();</span></div><div class='line' id='LC126'><br/></div><div class='line' id='LC127'>		<span class="nv">$paymentCurrency</span> <span class="o">=</span> <span class="nx">CurrencyDisplay</span><span class="o">::</span><span class="na">getInstance</span><span class="p">(</span><span class="nv">$method</span><span class="o">-&gt;</span><span class="na">payment_currency</span><span class="p">);</span></div><div class='line' id='LC128'>		<span class="nv">$totalInPaymentCurrency</span> <span class="o">=</span> <span class="nx">round</span><span class="p">(</span><span class="nv">$paymentCurrency</span><span class="o">-&gt;</span><span class="na">convertCurrencyTo</span><span class="p">(</span><span class="nv">$method</span><span class="o">-&gt;</span><span class="na">payment_currency</span><span class="p">,</span> <span class="nv">$order</span><span class="p">[</span><span class="s1">&#39;details&#39;</span><span class="p">][</span><span class="s1">&#39;BT&#39;</span><span class="p">]</span><span class="o">-&gt;</span><span class="na">order_total</span><span class="p">,</span> <span class="k">false</span><span class="p">),</span> <span class="mi">2</span><span class="p">);</span></div><div class='line' id='LC129'>		<span class="nv">$cd</span> <span class="o">=</span> <span class="nx">CurrencyDisplay</span><span class="o">::</span><span class="na">getInstance</span><span class="p">(</span><span class="nv">$cart</span><span class="o">-&gt;</span><span class="na">pricesCurrency</span><span class="p">);</span></div><div class='line' id='LC130'><br/></div><div class='line' id='LC131'>		<span class="nv">$tcoDetails</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">_getTcoDetails</span><span class="p">(</span><span class="nv">$method</span><span class="p">);</span></div><div class='line' id='LC132'><br/></div><div class='line' id='LC133'>		<span class="k">if</span> <span class="p">(</span><span class="k">empty</span><span class="p">(</span><span class="nv">$tcoDetails</span><span class="p">[</span><span class="s1">&#39;seller_id&#39;</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC134'>			<span class="nx">vmInfo</span><span class="p">(</span><span class="nx">JText</span><span class="o">::</span><span class="na">_</span><span class="p">(</span><span class="s1">&#39;VMPAYMENT_TCO_SELLER_ID_NOT_SET&#39;</span><span class="p">));</span></div><div class='line' id='LC135'>			<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC136'>		<span class="p">}</span></div><div class='line' id='LC137'>	    <span class="k">if</span> <span class="p">(</span><span class="nv">$method</span><span class="o">-&gt;</span><span class="na">sandbox</span> <span class="o">==</span> <span class="mi">1</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC138'>	    	<span class="nv">$demo</span> <span class="o">=</span> <span class="s2">&quot;Y&quot;</span><span class="p">;</span></div><div class='line' id='LC139'>	    <span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC140'>	    	<span class="nv">$demo</span> <span class="o">=</span> <span class="s2">&quot;N&quot;</span><span class="p">;</span></div><div class='line' id='LC141'>	    <span class="p">}</span></div><div class='line' id='LC142'>		<span class="nv">$testReq</span> <span class="o">=</span> <span class="nv">$method</span><span class="o">-&gt;</span><span class="na">debug</span> <span class="o">==</span> <span class="mi">1</span> <span class="o">?</span> <span class="s1">&#39;YES&#39;</span> <span class="o">:</span> <span class="s1">&#39;NO&#39;</span><span class="p">;</span></div><div class='line' id='LC143'>		<span class="nv">$post_variables</span> <span class="o">=</span> <span class="k">Array</span><span class="p">(</span></div><div class='line' id='LC144'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s2">&quot;sid&quot;</span> <span class="o">=&gt;</span> <span class="nv">$tcoDetails</span><span class="p">[</span><span class="s1">&#39;seller_id&#39;</span><span class="p">],</span></div><div class='line' id='LC145'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s2">&quot;x_receipt_link_url&quot;</span> <span class="o">=&gt;</span> <span class="nx">JROUTE</span><span class="o">::</span><span class="na">_</span><span class="p">(</span><span class="nx">JURI</span><span class="o">::</span><span class="na">root</span><span class="p">()</span> <span class="o">.</span> <span class="s1">&#39;index.php?option=com_virtuemart&amp;view=pluginresponse&amp;task=pluginresponsereceived&amp;pm=&#39;</span> <span class="o">.</span> <span class="nv">$order</span><span class="p">[</span><span class="s1">&#39;details&#39;</span><span class="p">][</span><span class="s1">&#39;BT&#39;</span><span class="p">]</span><span class="o">-&gt;</span><span class="na">virtuemart_paymentmethod_id</span><span class="o">.</span><span class="s2">&quot;&amp;o_id=</span><span class="si">{</span><span class="nv">$order</span><span class="p">[</span><span class="s1">&#39;details&#39;</span><span class="p">][</span><span class="s1">&#39;BT&#39;</span><span class="p">]</span><span class="o">-&gt;</span><span class="na">order_number</span><span class="si">}</span><span class="s2">&quot;</span><span class="p">),</span></div><div class='line' id='LC146'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s2">&quot;merchant_order_id&quot;</span> <span class="o">=&gt;</span> <span class="nv">$order</span><span class="p">[</span><span class="s1">&#39;details&#39;</span><span class="p">][</span><span class="s1">&#39;BT&#39;</span><span class="p">]</span><span class="o">-&gt;</span><span class="na">order_number</span><span class="p">,</span></div><div class='line' id='LC147'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s2">&quot;custom&quot;</span> <span class="o">=&gt;</span> <span class="nv">$return_context</span><span class="p">,</span></div><div class='line' id='LC148'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s2">&quot;cart_order_id&quot;</span> <span class="o">=&gt;</span> <span class="nx">JText</span><span class="o">::</span><span class="na">_</span><span class="p">(</span><span class="s1">&#39;VMPAYMENT_TCO_ORDER_NUMBER&#39;</span><span class="p">)</span> <span class="o">.</span> <span class="s1">&#39;: &#39;</span> <span class="o">.</span> <span class="nv">$order</span><span class="p">[</span><span class="s1">&#39;details&#39;</span><span class="p">][</span><span class="s1">&#39;BT&#39;</span><span class="p">]</span><span class="o">-&gt;</span><span class="na">order_number</span><span class="p">,</span></div><div class='line' id='LC149'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s2">&quot;total&quot;</span> <span class="o">=&gt;</span> <span class="nv">$totalInPaymentCurrency</span><span class="p">,</span></div><div class='line' id='LC150'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s2">&quot;currency_code&quot;</span> <span class="o">=&gt;</span> <span class="nv">$currency_code_3</span><span class="p">,</span></div><div class='line' id='LC151'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s2">&quot;first_name&quot;</span> <span class="o">=&gt;</span> <span class="nv">$address</span><span class="o">-&gt;</span><span class="na">first_name</span><span class="p">,</span></div><div class='line' id='LC152'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s2">&quot;last_name&quot;</span> <span class="o">=&gt;</span> <span class="nv">$address</span><span class="o">-&gt;</span><span class="na">last_name</span><span class="p">,</span></div><div class='line' id='LC153'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s2">&quot;street_address&quot;</span> <span class="o">=&gt;</span> <span class="nv">$address</span><span class="o">-&gt;</span><span class="na">address_1</span><span class="p">,</span></div><div class='line' id='LC154'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s2">&quot;street_address2&quot;</span> <span class="o">=&gt;</span> <span class="nb">isset</span><span class="p">(</span><span class="nv">$address</span><span class="o">-&gt;</span><span class="na">address_2</span><span class="p">)</span> <span class="o">?</span> <span class="nv">$address</span><span class="o">-&gt;</span><span class="na">address_2</span> <span class="o">:</span> <span class="s1">&#39;&#39;</span><span class="p">,</span></div><div class='line' id='LC155'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s2">&quot;zip&quot;</span> <span class="o">=&gt;</span> <span class="nv">$address</span><span class="o">-&gt;</span><span class="na">zip</span><span class="p">,</span></div><div class='line' id='LC156'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s2">&quot;city&quot;</span> <span class="o">=&gt;</span> <span class="nv">$address</span><span class="o">-&gt;</span><span class="na">city</span><span class="p">,</span></div><div class='line' id='LC157'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s2">&quot;state&quot;</span> <span class="o">=&gt;</span> <span class="nb">isset</span><span class="p">(</span><span class="nv">$address</span><span class="o">-&gt;</span><span class="na">virtuemart_state_id</span><span class="p">)</span> <span class="o">?</span> <span class="nx">ShopFunctions</span><span class="o">::</span><span class="na">getStateByID</span><span class="p">(</span><span class="nv">$address</span><span class="o">-&gt;</span><span class="na">virtuemart_state_id</span><span class="p">)</span> <span class="o">:</span> <span class="s1">&#39;&#39;</span><span class="p">,</span></div><div class='line' id='LC158'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s2">&quot;country&quot;</span> <span class="o">=&gt;</span> <span class="nx">ShopFunctions</span><span class="o">::</span><span class="na">getCountryByID</span><span class="p">(</span><span class="nv">$address</span><span class="o">-&gt;</span><span class="na">virtuemart_country_id</span><span class="p">,</span> <span class="s1">&#39;country_3_code&#39;</span><span class="p">),</span></div><div class='line' id='LC159'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s2">&quot;email&quot;</span> <span class="o">=&gt;</span> <span class="nv">$order</span><span class="p">[</span><span class="s1">&#39;details&#39;</span><span class="p">][</span><span class="s1">&#39;BT&#39;</span><span class="p">]</span><span class="o">-&gt;</span><span class="na">email</span><span class="p">,</span></div><div class='line' id='LC160'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s2">&quot;phone&quot;</span> <span class="o">=&gt;</span> <span class="nv">$address</span><span class="o">-&gt;</span><span class="na">phone_1</span><span class="p">,</span></div><div class='line' id='LC161'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s2">&quot;demo&quot;</span> <span class="o">=&gt;</span> <span class="nv">$demo</span><span class="p">,</span></div><div class='line' id='LC162'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s2">&quot;purchase_step&quot;</span> <span class="o">=&gt;</span> <span class="s1">&#39;payment-method&#39;</span><span class="p">,</span></div><div class='line' id='LC163'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s2">&quot;id_type&quot;</span> <span class="o">=&gt;</span> <span class="s2">&quot;1&quot;</span></div><div class='line' id='LC164'>		<span class="p">);</span></div><div class='line' id='LC165'><br/></div><div class='line' id='LC166'>	  <span class="nv">$i</span> <span class="o">=</span> <span class="mi">0</span><span class="p">;</span></div><div class='line' id='LC167'>		<span class="k">foreach</span> <span class="p">(</span><span class="nv">$cart</span><span class="o">-&gt;</span><span class="na">products</span> <span class="k">as</span> <span class="nv">$key</span> <span class="o">=&gt;</span> <span class="nv">$product</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC168'>		<span class="nv">$post_variables</span><span class="p">[</span><span class="s2">&quot;c_prod_&quot;</span> <span class="o">.</span> <span class="nv">$i</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$i</span><span class="o">.</span><span class="s2">&quot;,&quot;</span><span class="o">.</span><span class="nv">$product</span><span class="o">-&gt;</span><span class="na">quantity</span><span class="p">;</span></div><div class='line' id='LC169'>		<span class="nv">$post_variables</span><span class="p">[</span><span class="s2">&quot;c_name_&quot;</span> <span class="o">.</span> <span class="nv">$i</span><span class="p">]</span> <span class="o">=</span> <span class="nx">substr</span><span class="p">(</span><span class="nb">strip_tags</span><span class="p">(</span><span class="nv">$product</span><span class="o">-&gt;</span><span class="na">product_name</span><span class="p">),</span> <span class="mi">0</span><span class="p">,</span> <span class="mi">127</span><span class="p">);</span></div><div class='line' id='LC170'>		<span class="nv">$post_variables</span><span class="p">[</span><span class="s2">&quot;c_description_&quot;</span> <span class="o">.</span> <span class="nv">$i</span><span class="p">]</span> <span class="o">=</span> <span class="nx">substr</span><span class="p">(</span><span class="nb">strip_tags</span><span class="p">(</span><span class="nv">$product</span><span class="o">-&gt;</span><span class="na">product_name</span><span class="p">),</span> <span class="mi">0</span><span class="p">,</span> <span class="mi">127</span><span class="p">);</span></div><div class='line' id='LC171'>		<span class="nv">$post_variables</span><span class="p">[</span><span class="s2">&quot;c_price_&quot;</span> <span class="o">.</span> <span class="nv">$i</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$cart</span><span class="o">-&gt;</span><span class="na">pricesUnformatted</span><span class="p">[</span><span class="nv">$key</span><span class="p">][</span><span class="s1">&#39;salesPrice&#39;</span><span class="p">];</span></div><div class='line' id='LC172'>		<span class="nv">$i</span><span class="o">++</span><span class="p">;</span></div><div class='line' id='LC173'>		<span class="p">}</span></div><div class='line' id='LC174'><br/></div><div class='line' id='LC175'><br/></div><div class='line' id='LC176'><br/></div><div class='line' id='LC177'>		<span class="c1">// Prepare data that should be stored in the database</span></div><div class='line' id='LC178'>		<span class="nv">$dbValues</span><span class="p">[</span><span class="s1">&#39;order_number&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$order</span><span class="p">[</span><span class="s1">&#39;details&#39;</span><span class="p">][</span><span class="s1">&#39;BT&#39;</span><span class="p">]</span><span class="o">-&gt;</span><span class="na">order_number</span><span class="p">;</span></div><div class='line' id='LC179'>		<span class="nv">$dbValues</span><span class="p">[</span><span class="s1">&#39;payment_name&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">renderPluginName</span><span class="p">(</span><span class="nv">$method</span><span class="p">,</span> <span class="nv">$order</span><span class="p">);</span></div><div class='line' id='LC180'>		<span class="nv">$dbValues</span><span class="p">[</span><span class="s1">&#39;virtuemart_paymentmethod_id&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$cart</span><span class="o">-&gt;</span><span class="na">virtuemart_paymentmethod_id</span><span class="p">;</span></div><div class='line' id='LC181'>		<span class="nv">$dbValues</span><span class="p">[</span><span class="s1">&#39;tco_custom&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$return_context</span><span class="p">;</span></div><div class='line' id='LC182'>		<span class="nv">$dbValues</span><span class="p">[</span><span class="s1">&#39;cost_per_transaction&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$method</span><span class="o">-&gt;</span><span class="na">cost_per_transaction</span><span class="p">;</span></div><div class='line' id='LC183'>		<span class="nv">$dbValues</span><span class="p">[</span><span class="s1">&#39;cost_percent_total&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$method</span><span class="o">-&gt;</span><span class="na">cost_percent_total</span><span class="p">;</span></div><div class='line' id='LC184'>		<span class="nv">$dbValues</span><span class="p">[</span><span class="s1">&#39;payment_currency&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$method</span><span class="o">-&gt;</span><span class="na">payment_currency</span><span class="p">;</span></div><div class='line' id='LC185'>		<span class="nv">$dbValues</span><span class="p">[</span><span class="s1">&#39;payment_order_total&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$totalInPaymentCurrency</span><span class="p">;</span></div><div class='line' id='LC186'>		<span class="nv">$dbValues</span><span class="p">[</span><span class="s1">&#39;tax_id&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$method</span><span class="o">-&gt;</span><span class="na">tax_id</span><span class="p">;</span></div><div class='line' id='LC187'>		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">storePSPluginInternalData</span><span class="p">(</span><span class="nv">$dbValues</span><span class="p">);</span></div><div class='line' id='LC188'><br/></div><div class='line' id='LC189'>		<span class="c1">// add spin image</span></div><div class='line' id='LC190'>		<span class="nv">$html</span> <span class="o">=</span> <span class="s1">&#39;&lt;html&gt;&lt;head&gt;&lt;title&gt;Redirection&lt;/title&gt;&lt;/head&gt;&lt;body&gt;&lt;div style=&quot;margin: auto; text-align: center;&quot;&gt;&#39;</span><span class="p">;</span></div><div class='line' id='LC191'>		<span class="nv">$html</span> <span class="o">.=</span> <span class="s1">&#39;&lt;form action=&quot;&#39;</span> <span class="o">.</span> <span class="nv">$tcoDetails</span><span class="p">[</span><span class="s1">&#39;url&#39;</span><span class="p">]</span> <span class="o">.</span> <span class="s1">&#39;&quot; method=&quot;post&quot; name=&quot;vm_tco_form&quot; &gt;&#39;</span><span class="p">;</span></div><div class='line' id='LC192'>		<span class="k">foreach</span> <span class="p">(</span><span class="nv">$post_variables</span> <span class="k">as</span> <span class="nv">$name</span> <span class="o">=&gt;</span> <span class="nv">$value</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC193'>			<span class="nv">$html</span><span class="o">.=</span> <span class="s1">&#39;&lt;input type=&quot;hidden&quot; name=&quot;&#39;</span> <span class="o">.</span> <span class="nv">$name</span> <span class="o">.</span> <span class="s1">&#39;&quot; value=&quot;&#39;</span> <span class="o">.</span> <span class="nb">htmlspecialchars</span><span class="p">(</span><span class="nv">$value</span><span class="p">)</span> <span class="o">.</span> <span class="s1">&#39;&quot; /&gt;&#39;</span><span class="p">;</span></div><div class='line' id='LC194'>		<span class="p">}</span></div><div class='line' id='LC195'><br/></div><div class='line' id='LC196'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$method</span><span class="o">-&gt;</span><span class="na">direct_checkout</span> <span class="o">==</span> <span class="mi">1</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC197'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$html</span><span class="o">.=</span> <span class="s1">&#39;&lt;input type=&quot;submit&quot;  value=&quot;&#39;</span> <span class="o">.</span> <span class="nx">JText</span><span class="o">::</span><span class="na">_</span><span class="p">(</span><span class="s1">&#39;VMPAYMENT_TCO_BUTTON_MESSAGE&#39;</span><span class="p">)</span> <span class="o">.</span> <span class="s1">&#39;&quot; /&gt;&#39;</span><span class="p">;</span></div><div class='line' id='LC198'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$html</span><span class="o">.=</span> <span class="s1">&#39;&lt;/form&gt;&lt;/div&gt;&#39;</span><span class="p">;</span></div><div class='line' id='LC199'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$html</span><span class="o">.=</span> <span class="s1">&#39;&lt;script src=&quot;https://www.2checkout.com/static/checkout/javascript/direct.min.js&quot;&gt;&lt;/script&gt;&#39;</span><span class="p">;</span></div><div class='line' id='LC200'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC201'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$html</span><span class="o">.=</span> <span class="s1">&#39;&lt;input type=&quot;submit&quot;  value=&quot;&#39;</span> <span class="o">.</span> <span class="nx">JText</span><span class="o">::</span><span class="na">_</span><span class="p">(</span><span class="s1">&#39;VMPAYMENT_TCO_REDIRECT_MESSAGE&#39;</span><span class="p">)</span> <span class="o">.</span> <span class="s1">&#39;&quot; /&gt;&#39;</span><span class="p">;</span></div><div class='line' id='LC202'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$html</span><span class="o">.=</span> <span class="s1">&#39;&lt;/form&gt;&lt;/div&gt;&#39;</span><span class="p">;</span></div><div class='line' id='LC203'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$html</span><span class="o">.=</span> <span class="s1">&#39; &lt;script type=&quot;text/javascript&quot;&gt;&#39;</span><span class="p">;</span></div><div class='line' id='LC204'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$html</span><span class="o">.=</span> <span class="s1">&#39; document.vm_tco_form.submit();&#39;</span><span class="p">;</span></div><div class='line' id='LC205'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$html</span><span class="o">.=</span> <span class="s1">&#39;&lt;/script&gt;&#39;</span><span class="p">;</span></div><div class='line' id='LC206'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC207'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$html</span><span class="o">.=</span> <span class="s1">&#39;&lt;/body&gt;&lt;/html&gt;&#39;</span><span class="p">;</span></div><div class='line' id='LC208'><br/></div><div class='line' id='LC209'>		<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">processConfirmedOrderPaymentResponse</span><span class="p">(</span><span class="mi">2</span><span class="p">,</span> <span class="nv">$cart</span><span class="p">,</span> <span class="nv">$order</span><span class="p">,</span> <span class="nv">$html</span><span class="p">,</span> <span class="nv">$dbValues</span><span class="p">[</span><span class="s1">&#39;payment_name&#39;</span><span class="p">],</span> <span class="nv">$new_status</span><span class="p">);</span></div><div class='line' id='LC210'>	<span class="p">}</span></div><div class='line' id='LC211'><br/></div><div class='line' id='LC212'>	<span class="k">function</span> <span class="nf">plgVmgetPaymentCurrency</span><span class="p">(</span><span class="nv">$virtuemart_paymentmethod_id</span><span class="p">,</span> <span class="o">&amp;</span><span class="nv">$paymentCurrencyId</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC213'><br/></div><div class='line' id='LC214'>		<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="p">(</span><span class="nv">$method</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getVmPluginMethod</span><span class="p">(</span><span class="nv">$virtuemart_paymentmethod_id</span><span class="p">)))</span> <span class="p">{</span></div><div class='line' id='LC215'>			<span class="k">return</span> <span class="k">null</span><span class="p">;</span> <span class="c1">// Another method was selected, do nothing</span></div><div class='line' id='LC216'>		<span class="p">}</span></div><div class='line' id='LC217'>		<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">selectedThisElement</span><span class="p">(</span><span class="nv">$method</span><span class="o">-&gt;</span><span class="na">payment_element</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC218'>			<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC219'>		<span class="p">}</span></div><div class='line' id='LC220'>		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getPaymentCurrency</span><span class="p">(</span><span class="nv">$method</span><span class="p">);</span></div><div class='line' id='LC221'>		<span class="nv">$paymentCurrencyId</span> <span class="o">=</span> <span class="nv">$method</span><span class="o">-&gt;</span><span class="na">payment_currency</span><span class="p">;</span></div><div class='line' id='LC222'>	<span class="p">}</span></div><div class='line' id='LC223'><br/></div><div class='line' id='LC224'>	<span class="k">function</span> <span class="nf">plgVmOnPaymentResponseReceived</span><span class="p">(</span><span class="o">&amp;</span><span class="nv">$html</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC225'><br/></div><div class='line' id='LC226'>		<span class="c1">// the payment itself should send the parameter needed.</span></div><div class='line' id='LC227'>		<span class="nv">$virtuemart_paymentmethod_id</span> <span class="o">=</span> <span class="nx">JRequest</span><span class="o">::</span><span class="na">getInt</span><span class="p">(</span><span class="s1">&#39;pm&#39;</span><span class="p">,</span> <span class="mi">0</span><span class="p">);</span></div><div class='line' id='LC228'>		<span class="c1">// $order_number = JRequest::getVar(&#39;on&#39;, 0);</span></div><div class='line' id='LC229'>		<span class="nv">$order_number</span> <span class="o">=</span> <span class="nx">JRequest</span><span class="o">::</span><span class="na">getVar</span><span class="p">(</span><span class="s1">&#39;on&#39;</span><span class="p">,</span> <span class="mi">0</span><span class="p">);</span></div><div class='line' id='LC230'>		<span class="nv">$vendorId</span> <span class="o">=</span> <span class="mi">0</span><span class="p">;</span></div><div class='line' id='LC231'>		<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="p">(</span><span class="nv">$method</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getVmPluginMethod</span><span class="p">(</span><span class="nv">$virtuemart_paymentmethod_id</span><span class="p">)))</span> <span class="p">{</span></div><div class='line' id='LC232'>			<span class="k">return</span> <span class="k">null</span><span class="p">;</span> <span class="c1">// Another method was selected, do nothing</span></div><div class='line' id='LC233'>		<span class="p">}</span></div><div class='line' id='LC234'>		<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">selectedThisElement</span><span class="p">(</span><span class="nv">$method</span><span class="o">-&gt;</span><span class="na">payment_element</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC235'>			<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC236'>		<span class="p">}</span></div><div class='line' id='LC237'>		<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nb">class_exists</span><span class="p">(</span><span class="s1">&#39;VirtueMartCart&#39;</span><span class="p">))</span></div><div class='line' id='LC238'>		<span class="k">require</span><span class="p">(</span><span class="nx">JPATH_VM_SITE</span> <span class="o">.</span> <span class="nx">DS</span> <span class="o">.</span> <span class="s1">&#39;helpers&#39;</span> <span class="o">.</span> <span class="nx">DS</span> <span class="o">.</span> <span class="s1">&#39;cart.php&#39;</span><span class="p">);</span></div><div class='line' id='LC239'>		<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nb">class_exists</span><span class="p">(</span><span class="s1">&#39;shopFunctionsF&#39;</span><span class="p">))</span></div><div class='line' id='LC240'>		<span class="k">require</span><span class="p">(</span><span class="nx">JPATH_VM_SITE</span> <span class="o">.</span> <span class="nx">DS</span> <span class="o">.</span> <span class="s1">&#39;helpers&#39;</span> <span class="o">.</span> <span class="nx">DS</span> <span class="o">.</span> <span class="s1">&#39;shopfunctionsf.php&#39;</span><span class="p">);</span></div><div class='line' id='LC241'>		<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nb">class_exists</span><span class="p">(</span><span class="s1">&#39;VirtueMartModelOrders&#39;</span><span class="p">))</span></div><div class='line' id='LC242'>		<span class="k">require</span><span class="p">(</span> <span class="nx">JPATH_VM_ADMINISTRATOR</span> <span class="o">.</span> <span class="nx">DS</span> <span class="o">.</span> <span class="s1">&#39;models&#39;</span> <span class="o">.</span> <span class="nx">DS</span> <span class="o">.</span> <span class="s1">&#39;orders.php&#39;</span> <span class="p">);</span></div><div class='line' id='LC243'><br/></div><div class='line' id='LC244'>		<span class="nv">$tco_data</span> <span class="o">=</span> <span class="nx">JRequest</span><span class="o">::</span><span class="na">get</span><span class="p">(</span><span class="s1">&#39;request&#39;</span><span class="p">);</span></div><div class='line' id='LC245'>		<span class="nv">$payment_name</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">renderPluginName</span><span class="p">(</span><span class="nv">$method</span><span class="p">);</span></div><div class='line' id='LC246'><br/></div><div class='line' id='LC247'>		<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="k">empty</span><span class="p">(</span><span class="nv">$tco_data</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC248'>			<span class="nx">vmdebug</span><span class="p">(</span><span class="s1">&#39;plgVmOnPaymentResponseReceived&#39;</span><span class="p">,</span> <span class="nv">$tco_data</span><span class="p">);</span></div><div class='line' id='LC249'>			<span class="nv">$order_number</span> <span class="o">=</span> <span class="nv">$tco_data</span><span class="p">[</span><span class="s1">&#39;merchant_order_id&#39;</span><span class="p">];</span></div><div class='line' id='LC250'>			<span class="nv">$return_context</span> <span class="o">=</span> <span class="nv">$tco_data</span><span class="p">[</span><span class="s1">&#39;custom&#39;</span><span class="p">];</span></div><div class='line' id='LC251'>			<span class="nv">$virtuemart_order_id</span> <span class="o">=</span> <span class="nx">VirtueMartModelOrders</span><span class="o">::</span><span class="na">getOrderIdByOrderNumber</span><span class="p">(</span><span class="nv">$order_number</span><span class="p">);</span></div><div class='line' id='LC252'>			<span class="nv">$payment_name</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">renderPluginName</span><span class="p">(</span><span class="nv">$method</span><span class="p">);</span></div><div class='line' id='LC253'>			<span class="nv">$html</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">_getPaymentResponseHtml</span><span class="p">(</span><span class="nv">$tco_data</span><span class="p">,</span> <span class="nv">$payment_name</span><span class="p">);</span></div><div class='line' id='LC254'>			<span class="k">if</span> <span class="p">(</span><span class="nv">$virtuemart_order_id</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC255'>				<span class="nv">$order</span><span class="p">[</span><span class="s1">&#39;customer_notified&#39;</span><span class="p">]</span><span class="o">=</span><span class="mi">1</span><span class="p">;</span></div><div class='line' id='LC256'>				<span class="nv">$order</span><span class="p">[</span><span class="s1">&#39;order_status&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">_getPaymentStatus</span><span class="p">(</span><span class="nv">$method</span><span class="p">,</span> <span class="nv">$tco_data</span><span class="p">[</span><span class="s1">&#39;key&#39;</span><span class="p">],</span> <span class="nv">$tco_data</span><span class="p">[</span><span class="s1">&#39;demo&#39;</span><span class="p">],</span> <span class="nv">$tco_data</span><span class="p">[</span><span class="s1">&#39;order_number&#39;</span><span class="p">],</span> <span class="nv">$tco_data</span><span class="p">[</span><span class="s1">&#39;total&#39;</span><span class="p">]);</span></div><div class='line' id='LC257'>				<span class="nv">$order</span><span class="p">[</span><span class="s1">&#39;comments&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nx">JText</span><span class="o">::</span><span class="na">sprintf</span><span class="p">(</span><span class="s1">&#39;VMPAYMENT_TCO_PAYMENT_STATUS_CONFIRMED&#39;</span><span class="p">,</span> <span class="nv">$order_number</span><span class="p">);</span></div><div class='line' id='LC258'>				<span class="c1">// send the email ONLY if payment has been accepted</span></div><div class='line' id='LC259'>				<span class="nv">$modelOrder</span> <span class="o">=</span> <span class="nx">VmModel</span><span class="o">::</span><span class="na">getModel</span><span class="p">(</span><span class="s1">&#39;orders&#39;</span><span class="p">);</span></div><div class='line' id='LC260'>				<span class="nv">$orderitems</span> <span class="o">=</span> <span class="nv">$modelOrder</span><span class="o">-&gt;</span><span class="na">getOrder</span><span class="p">(</span><span class="nv">$virtuemart_order_id</span><span class="p">);</span></div><div class='line' id='LC261'>				<span class="nv">$nb_history</span> <span class="o">=</span> <span class="nb">count</span><span class="p">(</span><span class="nv">$orderitems</span><span class="p">[</span><span class="s1">&#39;history&#39;</span><span class="p">]);</span></div><div class='line' id='LC262'>				<span class="k">if</span> <span class="p">(</span><span class="nv">$orderitems</span><span class="p">[</span><span class="s1">&#39;history&#39;</span><span class="p">][</span><span class="nv">$nb_history</span> <span class="o">-</span> <span class="mi">1</span><span class="p">]</span><span class="o">-&gt;</span><span class="na">order_status_code</span> <span class="o">!=</span> <span class="nv">$order</span><span class="p">[</span><span class="s1">&#39;order_status&#39;</span><span class="p">])</span> <span class="p">{</span></div><div class='line' id='LC263'>					<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">_storeTcoInternalData</span><span class="p">(</span><span class="nv">$method</span><span class="p">,</span> <span class="nv">$tco_data</span><span class="p">,</span> <span class="nv">$virtuemart_order_id</span><span class="p">);</span></div><div class='line' id='LC264'>					<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">logInfo</span><span class="p">(</span><span class="s1">&#39;plgVmOnPaymentResponseReceived, sentOrderConfirmedEmail &#39;</span> <span class="o">.</span> <span class="nv">$order_number</span><span class="p">,</span> <span class="s1">&#39;message&#39;</span><span class="p">);</span></div><div class='line' id='LC265'>					<span class="nv">$order</span><span class="p">[</span><span class="s1">&#39;virtuemart_order_id&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$virtuemart_order_id</span><span class="p">;</span></div><div class='line' id='LC266'>					<span class="nv">$order</span><span class="p">[</span><span class="s1">&#39;comments&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nx">JText</span><span class="o">::</span><span class="na">sprintf</span><span class="p">(</span><span class="s1">&#39;VMPAYMENT_TCO_EMAIL_SENT&#39;</span><span class="p">);</span></div><div class='line' id='LC267'>					<span class="nv">$modelOrder</span><span class="o">-&gt;</span><span class="na">updateStatusForOneOrder</span><span class="p">(</span><span class="nv">$virtuemart_order_id</span><span class="p">,</span> <span class="nv">$order</span><span class="p">,</span> <span class="k">true</span><span class="p">);</span></div><div class='line' id='LC268'>				<span class="p">}</span></div><div class='line' id='LC269'>			<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC270'>				<span class="nx">vmError</span><span class="p">(</span><span class="s1">&#39;2Checkout data received, but no order number&#39;</span><span class="p">);</span></div><div class='line' id='LC271'>				<span class="k">return</span><span class="p">;</span></div><div class='line' id='LC272'>			<span class="p">}</span></div><div class='line' id='LC273'>		<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC274'>			<span class="nv">$virtuemart_order_id</span> <span class="o">=</span> <span class="nx">VirtueMartModelOrders</span><span class="o">::</span><span class="na">getOrderIdByOrderNumber</span><span class="p">(</span><span class="nv">$order_number</span><span class="p">);</span></div><div class='line' id='LC275'>		<span class="p">}</span></div><div class='line' id='LC276'><br/></div><div class='line' id='LC277'>		<span class="nv">$cart</span> <span class="o">=</span> <span class="nx">VirtueMartCart</span><span class="o">::</span><span class="na">getCart</span><span class="p">();</span></div><div class='line' id='LC278'>		<span class="nv">$cart</span><span class="o">-&gt;</span><span class="na">emptyCart</span><span class="p">();</span></div><div class='line' id='LC279'>		<span class="k">return</span> <span class="k">true</span><span class="p">;</span></div><div class='line' id='LC280'>	<span class="p">}</span></div><div class='line' id='LC281'><br/></div><div class='line' id='LC282'>	<span class="k">function</span> <span class="nf">plgVmOnUserPaymentCancel</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC283'><br/></div><div class='line' id='LC284'>		<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nb">class_exists</span><span class="p">(</span><span class="s1">&#39;VirtueMartModelOrders&#39;</span><span class="p">))</span></div><div class='line' id='LC285'>		<span class="k">require</span><span class="p">(</span> <span class="nx">JPATH_VM_ADMINISTRATOR</span> <span class="o">.</span> <span class="nx">DS</span> <span class="o">.</span> <span class="s1">&#39;models&#39;</span> <span class="o">.</span> <span class="nx">DS</span> <span class="o">.</span> <span class="s1">&#39;orders.php&#39;</span> <span class="p">);</span></div><div class='line' id='LC286'><br/></div><div class='line' id='LC287'>		<span class="nv">$order_number</span> <span class="o">=</span> <span class="nx">JRequest</span><span class="o">::</span><span class="na">getVar</span><span class="p">(</span><span class="s1">&#39;on&#39;</span><span class="p">);</span></div><div class='line' id='LC288'>		<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nv">$order_number</span><span class="p">)</span></div><div class='line' id='LC289'>		<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC290'>		<span class="nv">$db</span> <span class="o">=</span> <span class="nx">JFactory</span><span class="o">::</span><span class="na">getDBO</span><span class="p">();</span></div><div class='line' id='LC291'>		<span class="nv">$query</span> <span class="o">=</span> <span class="s1">&#39;SELECT &#39;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">_tablename</span> <span class="o">.</span> <span class="s1">&#39;.`virtuemart_order_id` FROM &#39;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">_tablename</span> <span class="o">.</span> <span class="s2">&quot; WHERE  `order_number`= &#39;&quot;</span> <span class="o">.</span> <span class="nv">$order_number</span> <span class="o">.</span> <span class="s2">&quot;&#39;&quot;</span><span class="p">;</span></div><div class='line' id='LC292'><br/></div><div class='line' id='LC293'>		<span class="nv">$db</span><span class="o">-&gt;</span><span class="na">setQuery</span><span class="p">(</span><span class="nv">$query</span><span class="p">);</span></div><div class='line' id='LC294'>		<span class="nv">$virtuemart_order_id</span> <span class="o">=</span> <span class="nv">$db</span><span class="o">-&gt;</span><span class="na">loadResult</span><span class="p">();</span></div><div class='line' id='LC295'><br/></div><div class='line' id='LC296'>		<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nv">$virtuemart_order_id</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC297'>			<span class="k">return</span> <span class="k">null</span><span class="p">;</span></div><div class='line' id='LC298'>		<span class="p">}</span></div><div class='line' id='LC299'>		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">handlePaymentUserCancel</span><span class="p">(</span><span class="nv">$virtuemart_order_id</span><span class="p">);</span></div><div class='line' id='LC300'><br/></div><div class='line' id='LC301'>		<span class="c1">//JRequest::setVar(&#39;paymentResponse&#39;, $returnValue);</span></div><div class='line' id='LC302'>		<span class="k">return</span> <span class="k">true</span><span class="p">;</span></div><div class='line' id='LC303'>	<span class="p">}</span></div><div class='line' id='LC304'><br/></div><div class='line' id='LC305'>	<span class="k">function</span> <span class="nf">_storeTcoInternalData</span><span class="p">(</span><span class="nv">$method</span><span class="p">,</span> <span class="nv">$tco_data</span><span class="p">,</span> <span class="nv">$virtuemart_order_id</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC306'><br/></div><div class='line' id='LC307'>		<span class="c1">// get all know columns of the table</span></div><div class='line' id='LC308'>		<span class="nv">$db</span> <span class="o">=</span> <span class="nx">JFactory</span><span class="o">::</span><span class="na">getDBO</span><span class="p">();</span></div><div class='line' id='LC309'>		<span class="nv">$query</span> <span class="o">=</span> <span class="s1">&#39;SHOW COLUMNS FROM `&#39;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">_tablename</span> <span class="o">.</span> <span class="s1">&#39;` &#39;</span><span class="p">;</span></div><div class='line' id='LC310'>		<span class="nv">$db</span><span class="o">-&gt;</span><span class="na">setQuery</span><span class="p">(</span><span class="nv">$query</span><span class="p">);</span></div><div class='line' id='LC311'>		<span class="nv">$columns</span> <span class="o">=</span> <span class="nv">$db</span><span class="o">-&gt;</span><span class="na">loadResultArray</span><span class="p">(</span><span class="mi">0</span><span class="p">);</span></div><div class='line' id='LC312'>		<span class="nv">$post_msg</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC313'>		<span class="k">foreach</span> <span class="p">(</span><span class="nv">$tco_data</span> <span class="k">as</span> <span class="nv">$key</span> <span class="o">=&gt;</span> <span class="nv">$value</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC314'>			<span class="nv">$post_msg</span> <span class="o">.=</span> <span class="nv">$key</span> <span class="o">.</span> <span class="s2">&quot;=&quot;</span> <span class="o">.</span> <span class="nv">$value</span> <span class="o">.</span> <span class="s2">&quot;&lt;br /&gt;&quot;</span><span class="p">;</span></div><div class='line' id='LC315'>			<span class="nv">$table_key</span> <span class="o">=</span> <span class="s1">&#39;tco_response_&#39;</span> <span class="o">.</span> <span class="nv">$key</span><span class="p">;</span></div><div class='line' id='LC316'>			<span class="k">if</span> <span class="p">(</span><span class="nb">in_array</span><span class="p">(</span><span class="nv">$table_key</span><span class="p">,</span> <span class="nv">$columns</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC317'>				<span class="nv">$response_fields</span><span class="p">[</span><span class="nv">$table_key</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$value</span><span class="p">;</span></div><div class='line' id='LC318'>			<span class="p">}</span></div><div class='line' id='LC319'>		<span class="p">}</span></div><div class='line' id='LC320'><br/></div><div class='line' id='LC321'>		<span class="nv">$response_fields</span><span class="p">[</span><span class="s1">&#39;payment_name&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">renderPluginName</span><span class="p">(</span><span class="nv">$method</span><span class="p">);</span></div><div class='line' id='LC322'>		<span class="nv">$response_fields</span><span class="p">[</span><span class="s1">&#39;tcoresponse_raw&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$post_msg</span><span class="p">;</span></div><div class='line' id='LC323'>		<span class="nv">$return_context</span> <span class="o">=</span> <span class="nv">$tco_data</span><span class="p">[</span><span class="s1">&#39;custom&#39;</span><span class="p">];</span></div><div class='line' id='LC324'>		<span class="nv">$response_fields</span><span class="p">[</span><span class="s1">&#39;order_number&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$tco_data</span><span class="p">[</span><span class="s1">&#39;merchant_order_id&#39;</span><span class="p">];</span></div><div class='line' id='LC325'>		<span class="nv">$response_fields</span><span class="p">[</span><span class="s1">&#39;virtuemart_order_id&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$virtuemart_order_id</span><span class="p">;</span></div><div class='line' id='LC326'>		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">storePSPluginInternalData</span><span class="p">(</span><span class="nv">$response_fields</span><span class="p">,</span> <span class="s1">&#39;virtuemart_order_id&#39;</span><span class="p">,</span> <span class="k">true</span><span class="p">);</span></div><div class='line' id='LC327'>	<span class="p">}</span></div><div class='line' id='LC328'><br/></div><div class='line' id='LC329'>	<span class="k">function</span> <span class="nf">_getTablepkeyValue</span><span class="p">(</span><span class="nv">$virtuemart_order_id</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC330'>		<span class="nv">$db</span> <span class="o">=</span> <span class="nx">JFactory</span><span class="o">::</span><span class="na">getDBO</span><span class="p">();</span></div><div class='line' id='LC331'>		<span class="nv">$q</span> <span class="o">=</span> <span class="s1">&#39;SELECT &#39;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">_tablepkey</span> <span class="o">.</span> <span class="s1">&#39; FROM `&#39;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">_tablename</span> <span class="o">.</span> <span class="s1">&#39;` &#39;</span></div><div class='line' id='LC332'>		<span class="o">.</span> <span class="s1">&#39;WHERE `virtuemart_order_id` = &#39;</span> <span class="o">.</span> <span class="nv">$virtuemart_order_id</span><span class="p">;</span></div><div class='line' id='LC333'>		<span class="nv">$db</span><span class="o">-&gt;</span><span class="na">setQuery</span><span class="p">(</span><span class="nv">$q</span><span class="p">);</span></div><div class='line' id='LC334'><br/></div><div class='line' id='LC335'>		<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="p">(</span><span class="nv">$pkey</span> <span class="o">=</span> <span class="nv">$db</span><span class="o">-&gt;</span><span class="na">loadResult</span><span class="p">()))</span> <span class="p">{</span></div><div class='line' id='LC336'>			<span class="nx">JError</span><span class="o">::</span><span class="na">raiseWarning</span><span class="p">(</span><span class="mi">500</span><span class="p">,</span> <span class="nv">$db</span><span class="o">-&gt;</span><span class="na">getErrorMsg</span><span class="p">());</span></div><div class='line' id='LC337'>			<span class="k">return</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC338'>		<span class="p">}</span></div><div class='line' id='LC339'>		<span class="k">return</span> <span class="nv">$pkey</span><span class="p">;</span></div><div class='line' id='LC340'>	<span class="p">}</span></div><div class='line' id='LC341'><br/></div><div class='line' id='LC342'>	<span class="k">function</span> <span class="nf">_getPaymentStatus</span><span class="p">(</span><span class="nv">$method</span><span class="p">,</span> <span class="nv">$key</span><span class="p">,</span> <span class="nv">$demo</span><span class="p">,</span> <span class="nv">$order_number</span><span class="p">,</span> <span class="nv">$total</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC343'>		<span class="nv">$tcoDetails</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">_getTcoDetails</span><span class="p">(</span><span class="nv">$method</span><span class="p">);</span></div><div class='line' id='LC344'>		<span class="k">if</span> <span class="p">(</span><span class="nv">$demo</span> <span class="o">==</span> <span class="s1">&#39;Y&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC345'>			<span class="nv">$order_number</span> <span class="o">=</span> <span class="mi">1</span><span class="p">;</span></div><div class='line' id='LC346'>		<span class="p">}</span></div><div class='line' id='LC347'>		<span class="nv">$compare_string</span> <span class="o">=</span> <span class="nv">$tcoDetails</span><span class="p">[</span><span class="s1">&#39;secret_word&#39;</span><span class="p">]</span> <span class="o">.</span> <span class="nv">$tcoDetails</span><span class="p">[</span><span class="s1">&#39;seller_id&#39;</span><span class="p">]</span> <span class="o">.</span> <span class="nv">$order_number</span> <span class="o">.</span> <span class="nv">$total</span><span class="p">;</span></div><div class='line' id='LC348'>&nbsp;&nbsp;		<span class="nv">$compare_hash1</span> <span class="o">=</span> <span class="nx">strtoupper</span><span class="p">(</span><span class="nb">md5</span><span class="p">(</span><span class="nv">$compare_string</span><span class="p">));</span></div><div class='line' id='LC349'>&nbsp;&nbsp;		<span class="nv">$compare_hash2</span> <span class="o">=</span> <span class="nv">$key</span><span class="p">;</span></div><div class='line' id='LC350'>&nbsp;		<span class="k">if</span> <span class="p">(</span><span class="nv">$compare_hash1</span> <span class="o">!=</span> <span class="nv">$compare_hash2</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC351'>			<span class="nv">$new_status</span> <span class="o">=</span> <span class="nv">$method</span><span class="o">-&gt;</span><span class="na">status_pending</span><span class="p">;</span></div><div class='line' id='LC352'>		<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC353'>			<span class="nv">$new_status</span> <span class="o">=</span> <span class="nv">$method</span><span class="o">-&gt;</span><span class="na">status_success</span><span class="p">;</span></div><div class='line' id='LC354'>		<span class="p">}</span></div><div class='line' id='LC355'>		<span class="k">return</span> <span class="nv">$new_status</span><span class="p">;</span></div><div class='line' id='LC356'>	<span class="p">}</span></div><div class='line' id='LC357'><br/></div><div class='line' id='LC358'>	<span class="sd">/**</span></div><div class='line' id='LC359'><span class="sd">	 * Display stored payment data for an order</span></div><div class='line' id='LC360'><span class="sd">	 * @see components/com_virtuemart/helpers/vmPSPlugin::plgVmOnShowOrderBEPayment()</span></div><div class='line' id='LC361'><span class="sd">	 */</span></div><div class='line' id='LC362'>	<span class="k">function</span> <span class="nf">plgVmOnShowOrderBEPayment</span><span class="p">(</span><span class="nv">$virtuemart_order_id</span><span class="p">,</span> <span class="nv">$payment_method_id</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC363'><br/></div><div class='line' id='LC364'>		<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">selectedThisByMethodId</span><span class="p">(</span><span class="nv">$payment_method_id</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC365'>			<span class="k">return</span> <span class="k">null</span><span class="p">;</span> <span class="c1">// Another method was selected, do nothing</span></div><div class='line' id='LC366'>		<span class="p">}</span></div><div class='line' id='LC367'><br/></div><div class='line' id='LC368'>		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getPaymentCurrency</span><span class="p">(</span><span class="nv">$paymentTable</span><span class="p">);</span></div><div class='line' id='LC369'>		<span class="nv">$q</span> <span class="o">=</span> <span class="s1">&#39;SELECT `currency_code_3` FROM `#__virtuemart_currencies` WHERE `virtuemart_currency_id`=&quot;&#39;</span> <span class="o">.</span> <span class="nv">$paymentTable</span><span class="o">-&gt;</span><span class="na">payment_currency</span> <span class="o">.</span> <span class="s1">&#39;&quot; &#39;</span><span class="p">;</span></div><div class='line' id='LC370'>		<span class="nv">$db</span> <span class="o">=</span> <span class="o">&amp;</span><span class="nx">JFactory</span><span class="o">::</span><span class="na">getDBO</span><span class="p">();</span></div><div class='line' id='LC371'>		<span class="nv">$db</span><span class="o">-&gt;</span><span class="na">setQuery</span><span class="p">(</span><span class="nv">$q</span><span class="p">);</span></div><div class='line' id='LC372'>		<span class="nv">$currency_code_3</span> <span class="o">=</span> <span class="nv">$db</span><span class="o">-&gt;</span><span class="na">loadResult</span><span class="p">();</span></div><div class='line' id='LC373'>		<span class="nv">$html</span> <span class="o">=</span> <span class="s1">&#39;&lt;table class=&quot;adminlist&quot;&gt;&#39;</span> <span class="o">.</span> <span class="s2">&quot;</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">;</span></div><div class='line' id='LC374'>		<span class="nv">$html</span> <span class="o">.=</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getHtmlHeaderBE</span><span class="p">();</span></div><div class='line' id='LC375'>		<span class="nv">$code</span> <span class="o">=</span> <span class="s2">&quot;tco_response_&quot;</span><span class="p">;</span></div><div class='line' id='LC376'>		<span class="k">foreach</span> <span class="p">(</span><span class="nv">$paymentTable</span> <span class="k">as</span> <span class="nv">$key</span> <span class="o">=&gt;</span> <span class="nv">$value</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC377'>			<span class="k">if</span> <span class="p">(</span><span class="nx">substr</span><span class="p">(</span><span class="nv">$key</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="nb">strlen</span><span class="p">(</span><span class="nv">$code</span><span class="p">))</span> <span class="o">==</span> <span class="nv">$code</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC378'>				<span class="nv">$html</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getHtmlRowBE</span><span class="p">(</span><span class="nv">$key</span><span class="p">,</span> <span class="nv">$value</span><span class="p">);</span></div><div class='line' id='LC379'>			<span class="p">}</span></div><div class='line' id='LC380'>		<span class="p">}</span></div><div class='line' id='LC381'>		<span class="nv">$html</span> <span class="o">.=</span> <span class="s1">&#39;&lt;/table&gt;&#39;</span> <span class="o">.</span> <span class="s2">&quot;</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">;</span></div><div class='line' id='LC382'>		<span class="k">return</span> <span class="nv">$html</span><span class="p">;</span></div><div class='line' id='LC383'>	<span class="p">}</span></div><div class='line' id='LC384'><br/></div><div class='line' id='LC385'>	<span class="k">function</span> <span class="nf">_getPaymentResponseHtml</span><span class="p">(</span><span class="nv">$tcoTable</span><span class="p">,</span> <span class="nv">$payment_name</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC386'><br/></div><div class='line' id='LC387'>		<span class="nv">$html</span> <span class="o">=</span> <span class="s1">&#39;&lt;table&gt;&#39;</span> <span class="o">.</span> <span class="s2">&quot;</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">;</span></div><div class='line' id='LC388'>		<span class="nv">$html</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getHtmlRow</span><span class="p">(</span><span class="s1">&#39;TCO_PAYMENT_NAME&#39;</span><span class="p">,</span> <span class="nv">$payment_name</span><span class="p">);</span></div><div class='line' id='LC389'>		<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="k">empty</span><span class="p">(</span><span class="nv">$tcoTable</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC390'>			<span class="nv">$html</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getHtmlRow</span><span class="p">(</span><span class="s1">&#39;TCO_ORDER_NUMBER&#39;</span><span class="p">,</span> <span class="nv">$tcoTable</span><span class="p">[</span><span class="s1">&#39;order_number&#39;</span><span class="p">]);</span></div><div class='line' id='LC391'>			<span class="nv">$html</span> <span class="o">.=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getHtmlRow</span><span class="p">(</span><span class="s1">&#39;TCO_AMOUNT&#39;</span><span class="p">,</span> <span class="nv">$tcoTable</span><span class="p">[</span><span class="s1">&#39;total&#39;</span><span class="p">]</span> <span class="o">.</span> <span class="s2">&quot; &quot;</span> <span class="o">.</span> <span class="nv">$tcoTable</span><span class="p">[</span><span class="s1">&#39;currency_code&#39;</span><span class="p">]);</span></div><div class='line' id='LC392'>		<span class="p">}</span></div><div class='line' id='LC393'>		<span class="nv">$html</span> <span class="o">.=</span> <span class="s1">&#39;&lt;/table&gt;&#39;</span> <span class="o">.</span> <span class="s2">&quot;</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">;</span></div><div class='line' id='LC394'><br/></div><div class='line' id='LC395'>		<span class="k">return</span> <span class="nv">$html</span><span class="p">;</span></div><div class='line' id='LC396'>	<span class="p">}</span></div><div class='line' id='LC397'><br/></div><div class='line' id='LC398'>	<span class="k">function</span> <span class="nf">getCosts</span><span class="p">(</span><span class="nx">VirtueMartCart</span> <span class="nv">$cart</span><span class="p">,</span> <span class="nv">$method</span><span class="p">,</span> <span class="nv">$cart_prices</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC399'>		<span class="k">if</span> <span class="p">(</span><span class="nb">preg_match</span><span class="p">(</span><span class="s1">&#39;/%$/&#39;</span><span class="p">,</span> <span class="nv">$method</span><span class="o">-&gt;</span><span class="na">cost_percent_total</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC400'>			<span class="nv">$cost_percent_total</span> <span class="o">=</span> <span class="nx">substr</span><span class="p">(</span><span class="nv">$method</span><span class="o">-&gt;</span><span class="na">cost_percent_total</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="o">-</span><span class="mi">1</span><span class="p">);</span></div><div class='line' id='LC401'>		<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC402'>			<span class="nv">$cost_percent_total</span> <span class="o">=</span> <span class="nv">$method</span><span class="o">-&gt;</span><span class="na">cost_percent_total</span><span class="p">;</span></div><div class='line' id='LC403'>		<span class="p">}</span></div><div class='line' id='LC404'>		<span class="k">return</span> <span class="p">(</span><span class="nv">$method</span><span class="o">-&gt;</span><span class="na">cost_per_transaction</span> <span class="o">+</span> <span class="p">(</span><span class="nv">$cart_prices</span><span class="p">[</span><span class="s1">&#39;salesPrice&#39;</span><span class="p">]</span> <span class="o">*</span> <span class="nv">$cost_percent_total</span> <span class="o">*</span> <span class="mf">0.01</span><span class="p">));</span></div><div class='line' id='LC405'>	<span class="p">}</span></div><div class='line' id='LC406'><br/></div><div class='line' id='LC407'><br/></div><div class='line' id='LC408'>	<span class="k">protected</span> <span class="k">function</span> <span class="nf">checkConditions</span><span class="p">(</span><span class="nv">$cart</span><span class="p">,</span> <span class="nv">$method</span><span class="p">,</span> <span class="nv">$cart_prices</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC409'><br/></div><div class='line' id='LC410'><br/></div><div class='line' id='LC411'>		<span class="nv">$address</span> <span class="o">=</span> <span class="p">((</span><span class="nv">$cart</span><span class="o">-&gt;</span><span class="na">ST</span> <span class="o">==</span> <span class="mi">0</span><span class="p">)</span> <span class="o">?</span> <span class="nv">$cart</span><span class="o">-&gt;</span><span class="na">BT</span> <span class="o">:</span> <span class="nv">$cart</span><span class="o">-&gt;</span><span class="na">ST</span><span class="p">);</span></div><div class='line' id='LC412'><br/></div><div class='line' id='LC413'>		<span class="nv">$amount</span> <span class="o">=</span> <span class="nv">$cart_prices</span><span class="p">[</span><span class="s1">&#39;salesPrice&#39;</span><span class="p">];</span></div><div class='line' id='LC414'>		<span class="nv">$amount_cond</span> <span class="o">=</span> <span class="p">(</span><span class="nv">$amount</span> <span class="o">&gt;=</span> <span class="nv">$method</span><span class="o">-&gt;</span><span class="na">min_amount</span> <span class="k">AND</span> <span class="nv">$amount</span> <span class="o">&lt;=</span> <span class="nv">$method</span><span class="o">-&gt;</span><span class="na">max_amount</span></div><div class='line' id='LC415'>		<span class="k">OR</span></div><div class='line' id='LC416'>		<span class="p">(</span><span class="nv">$method</span><span class="o">-&gt;</span><span class="na">min_amount</span> <span class="o">&lt;=</span> <span class="nv">$amount</span> <span class="k">AND</span> <span class="p">(</span><span class="nv">$method</span><span class="o">-&gt;</span><span class="na">max_amount</span> <span class="o">==</span> <span class="mi">0</span><span class="p">)</span> <span class="p">));</span></div><div class='line' id='LC417'><br/></div><div class='line' id='LC418'>		<span class="nv">$countries</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC419'>		<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="k">empty</span><span class="p">(</span><span class="nv">$method</span><span class="o">-&gt;</span><span class="na">countries</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC420'>			<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nb">is_array</span><span class="p">(</span><span class="nv">$method</span><span class="o">-&gt;</span><span class="na">countries</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC421'>				<span class="nv">$countries</span><span class="p">[</span><span class="mi">0</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$method</span><span class="o">-&gt;</span><span class="na">countries</span><span class="p">;</span></div><div class='line' id='LC422'>			<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC423'>				<span class="nv">$countries</span> <span class="o">=</span> <span class="nv">$method</span><span class="o">-&gt;</span><span class="na">countries</span><span class="p">;</span></div><div class='line' id='LC424'>			<span class="p">}</span></div><div class='line' id='LC425'>		<span class="p">}</span></div><div class='line' id='LC426'>		<span class="c1">// probably did not gave his BT:ST address</span></div><div class='line' id='LC427'>		<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nb">is_array</span><span class="p">(</span><span class="nv">$address</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC428'>			<span class="nv">$address</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC429'>			<span class="nv">$address</span><span class="p">[</span><span class="s1">&#39;virtuemart_country_id&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="mi">0</span><span class="p">;</span></div><div class='line' id='LC430'>		<span class="p">}</span></div><div class='line' id='LC431'><br/></div><div class='line' id='LC432'>		<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$address</span><span class="p">[</span><span class="s1">&#39;virtuemart_country_id&#39;</span><span class="p">]))</span></div><div class='line' id='LC433'>		<span class="nv">$address</span><span class="p">[</span><span class="s1">&#39;virtuemart_country_id&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="mi">0</span><span class="p">;</span></div><div class='line' id='LC434'>		<span class="k">if</span> <span class="p">(</span><span class="nb">in_array</span><span class="p">(</span><span class="nv">$address</span><span class="p">[</span><span class="s1">&#39;virtuemart_country_id&#39;</span><span class="p">],</span> <span class="nv">$countries</span><span class="p">)</span> <span class="o">||</span> <span class="nb">count</span><span class="p">(</span><span class="nv">$countries</span><span class="p">)</span> <span class="o">==</span> <span class="mi">0</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC435'>			<span class="k">if</span> <span class="p">(</span><span class="nv">$amount_cond</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC436'>				<span class="k">return</span> <span class="k">true</span><span class="p">;</span></div><div class='line' id='LC437'>			<span class="p">}</span></div><div class='line' id='LC438'>		<span class="p">}</span></div><div class='line' id='LC439'><br/></div><div class='line' id='LC440'>		<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC441'>	<span class="p">}</span></div><div class='line' id='LC442'><br/></div><div class='line' id='LC443'>	<span class="sd">/**</span></div><div class='line' id='LC444'><span class="sd">	 * We must reimplement this triggers for joomla 1.7</span></div><div class='line' id='LC445'><span class="sd">	 */</span></div><div class='line' id='LC446'><br/></div><div class='line' id='LC447'>	<span class="sd">/**</span></div><div class='line' id='LC448'><span class="sd">	 * Create the table for this plugin if it does not yet exist.</span></div><div class='line' id='LC449'><span class="sd">	 * This functions checks if the called plugin is active one.</span></div><div class='line' id='LC450'><span class="sd">	 * When yes it is calling the standard method to create the tables</span></div><div class='line' id='LC451'><span class="sd">	 * @author Valérie Isaksen</span></div><div class='line' id='LC452'><span class="sd">	 *</span></div><div class='line' id='LC453'><span class="sd">	 */</span></div><div class='line' id='LC454'>	<span class="k">function</span> <span class="nf">plgVmOnStoreInstallPaymentPluginTable</span><span class="p">(</span><span class="nv">$jplugin_id</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC455'><br/></div><div class='line' id='LC456'>		<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">onStoreInstallPluginTable</span><span class="p">(</span><span class="nv">$jplugin_id</span><span class="p">);</span></div><div class='line' id='LC457'>	<span class="p">}</span></div><div class='line' id='LC458'><br/></div><div class='line' id='LC459'>	<span class="sd">/**</span></div><div class='line' id='LC460'><span class="sd">	 * This event is fired after the payment method has been selected. It can be used to store</span></div><div class='line' id='LC461'><span class="sd">	 * additional payment info in the cart.</span></div><div class='line' id='LC462'><span class="sd">	 *</span></div><div class='line' id='LC463'><span class="sd">	 * @author Max Milbers</span></div><div class='line' id='LC464'><span class="sd">	 * @author Valérie isaksen</span></div><div class='line' id='LC465'><span class="sd">	 *</span></div><div class='line' id='LC466'><span class="sd">	 * @param VirtueMartCart $cart: the actual cart</span></div><div class='line' id='LC467'><span class="sd">	 * @return null if the payment was not selected, true if the data is valid, error message if the data is not vlaid</span></div><div class='line' id='LC468'><span class="sd">	 *</span></div><div class='line' id='LC469'><span class="sd">	 */</span></div><div class='line' id='LC470'>	<span class="k">public</span> <span class="k">function</span> <span class="nf">plgVmOnSelectCheckPayment</span><span class="p">(</span><span class="nx">VirtueMartCart</span> <span class="nv">$cart</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC471'>		<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">OnSelectCheck</span><span class="p">(</span><span class="nv">$cart</span><span class="p">);</span></div><div class='line' id='LC472'>	<span class="p">}</span></div><div class='line' id='LC473'><br/></div><div class='line' id='LC474'>	<span class="sd">/**</span></div><div class='line' id='LC475'><span class="sd">	 * plgVmDisplayListFEPayment</span></div><div class='line' id='LC476'><span class="sd">	 * This event is fired to display the pluginmethods in the cart (edit shipment/payment) for exampel</span></div><div class='line' id='LC477'><span class="sd">	 *</span></div><div class='line' id='LC478'><span class="sd">	 * @param object $cart Cart object</span></div><div class='line' id='LC479'><span class="sd">	 * @param integer $selected ID of the method selected</span></div><div class='line' id='LC480'><span class="sd">	 * @return boolean True on succes, false on failures, null when this plugin was not selected.</span></div><div class='line' id='LC481'><span class="sd">	 * On errors, JError::raiseWarning (or JError::raiseError) must be used to set a message.</span></div><div class='line' id='LC482'><span class="sd">	 *</span></div><div class='line' id='LC483'><span class="sd">	 * @author Valerie Isaksen</span></div><div class='line' id='LC484'><span class="sd">	 * @author Max Milbers</span></div><div class='line' id='LC485'><span class="sd">	 */</span></div><div class='line' id='LC486'>	<span class="k">public</span> <span class="k">function</span> <span class="nf">plgVmDisplayListFEPayment</span><span class="p">(</span><span class="nx">VirtueMartCart</span> <span class="nv">$cart</span><span class="p">,</span> <span class="nv">$selected</span> <span class="o">=</span> <span class="mi">0</span><span class="p">,</span> <span class="o">&amp;</span><span class="nv">$htmlIn</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC487'>		<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">displayListFE</span><span class="p">(</span><span class="nv">$cart</span><span class="p">,</span> <span class="nv">$selected</span><span class="p">,</span> <span class="nv">$htmlIn</span><span class="p">);</span></div><div class='line' id='LC488'>	<span class="p">}</span></div><div class='line' id='LC489'><br/></div><div class='line' id='LC490'>	<span class="cm">/*</span></div><div class='line' id='LC491'><span class="cm">	 * plgVmonSelectedCalculatePricePayment</span></div><div class='line' id='LC492'><span class="cm">	* Calculate the price (value, tax_id) of the selected method</span></div><div class='line' id='LC493'><span class="cm">	* It is called by the calculator</span></div><div class='line' id='LC494'><span class="cm">	* This function does NOT to be reimplemented. If not reimplemented, then the default values from this function are taken.</span></div><div class='line' id='LC495'><span class="cm">	* @author Valerie Isaksen</span></div><div class='line' id='LC496'><span class="cm">	* @cart: VirtueMartCart the current cart</span></div><div class='line' id='LC497'><span class="cm">	* @cart_prices: array the new cart prices</span></div><div class='line' id='LC498'><span class="cm">	* @return null if the method was not selected, false if the shiiping rate is not valid any more, true otherwise</span></div><div class='line' id='LC499'><span class="cm">	*</span></div><div class='line' id='LC500'><span class="cm">	*</span></div><div class='line' id='LC501'><span class="cm">	*/</span></div><div class='line' id='LC502'><br/></div><div class='line' id='LC503'>	<span class="k">public</span> <span class="k">function</span> <span class="nf">plgVmonSelectedCalculatePricePayment</span><span class="p">(</span><span class="nx">VirtueMartCart</span> <span class="nv">$cart</span><span class="p">,</span> <span class="k">array</span> <span class="o">&amp;</span><span class="nv">$cart_prices</span><span class="p">,</span> <span class="o">&amp;</span><span class="nv">$cart_prices_name</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC504'>		<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">onSelectedCalculatePrice</span><span class="p">(</span><span class="nv">$cart</span><span class="p">,</span> <span class="nv">$cart_prices</span><span class="p">,</span> <span class="nv">$cart_prices_name</span><span class="p">);</span></div><div class='line' id='LC505'>	<span class="p">}</span></div><div class='line' id='LC506'><br/></div><div class='line' id='LC507'>	<span class="sd">/**</span></div><div class='line' id='LC508'><span class="sd">	 * plgVmOnCheckAutomaticSelectedPayment</span></div><div class='line' id='LC509'><span class="sd">	 * Checks how many plugins are available. If only one, the user will not have the choice. Enter edit_xxx page</span></div><div class='line' id='LC510'><span class="sd">	 * The plugin must check first if it is the correct type</span></div><div class='line' id='LC511'><span class="sd">	 * @author Valerie Isaksen</span></div><div class='line' id='LC512'><span class="sd">	 * @param VirtueMartCart cart: the cart object</span></div><div class='line' id='LC513'><span class="sd">	 * @return null if no plugin was found, 0 if more then one plugin was found,  virtuemart_xxx_id if only one plugin is found</span></div><div class='line' id='LC514'><span class="sd">	 *</span></div><div class='line' id='LC515'><span class="sd">	 */</span></div><div class='line' id='LC516'>	<span class="k">function</span> <span class="nf">plgVmOnCheckAutomaticSelectedPayment</span><span class="p">(</span><span class="nx">VirtueMartCart</span> <span class="nv">$cart</span><span class="p">,</span> <span class="k">array</span> <span class="nv">$cart_prices</span> <span class="o">=</span> <span class="k">array</span><span class="p">())</span> <span class="p">{</span></div><div class='line' id='LC517'>		<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">onCheckAutomaticSelected</span><span class="p">(</span><span class="nv">$cart</span><span class="p">,</span> <span class="nv">$cart_prices</span><span class="p">);</span></div><div class='line' id='LC518'>	<span class="p">}</span></div><div class='line' id='LC519'><br/></div><div class='line' id='LC520'>	<span class="sd">/**</span></div><div class='line' id='LC521'><span class="sd">	 * This method is fired when showing the order details in the frontend.</span></div><div class='line' id='LC522'><span class="sd">	 * It displays the method-specific data.</span></div><div class='line' id='LC523'><span class="sd">	 *</span></div><div class='line' id='LC524'><span class="sd">	 * @param integer $order_id The order ID</span></div><div class='line' id='LC525'><span class="sd">	 * @return mixed Null for methods that aren&#39;t active, text (HTML) otherwise</span></div><div class='line' id='LC526'><span class="sd">	 * @author Max Milbers</span></div><div class='line' id='LC527'><span class="sd">	 * @author Valerie Isaksen</span></div><div class='line' id='LC528'><span class="sd">	 */</span></div><div class='line' id='LC529'>	<span class="k">public</span> <span class="k">function</span> <span class="nf">plgVmOnShowOrderFEPayment</span><span class="p">(</span><span class="nv">$virtuemart_order_id</span><span class="p">,</span> <span class="nv">$virtuemart_paymentmethod_id</span><span class="p">,</span> <span class="o">&amp;</span><span class="nv">$payment_name</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC530'>		<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">onShowOrderFE</span><span class="p">(</span><span class="nv">$virtuemart_order_id</span><span class="p">,</span> <span class="nv">$virtuemart_paymentmethod_id</span><span class="p">,</span> <span class="nv">$payment_name</span><span class="p">);</span></div><div class='line' id='LC531'>	<span class="p">}</span></div><div class='line' id='LC532'><br/></div><div class='line' id='LC533'>	<span class="sd">/**</span></div><div class='line' id='LC534'><span class="sd">	 * This event is fired during the checkout process. It can be used to validate the</span></div><div class='line' id='LC535'><span class="sd">	 * method data as entered by the user.</span></div><div class='line' id='LC536'><span class="sd">	 *</span></div><div class='line' id='LC537'><span class="sd">	 * @return boolean True when the data was valid, false otherwise. If the plugin is not activated, it should return null.</span></div><div class='line' id='LC538'><span class="sd">	 * @author Max Milbers</span></div><div class='line' id='LC539'><br/></div><div class='line' id='LC540'><span class="sd">	 public function plgVmOnCheckoutCheckDataPayment($psType, VirtueMartCart $cart) {</span></div><div class='line' id='LC541'><span class="sd">	 return null;</span></div><div class='line' id='LC542'><span class="sd">	 }</span></div><div class='line' id='LC543'><span class="sd">	 */</span></div><div class='line' id='LC544'><br/></div><div class='line' id='LC545'>	<span class="sd">/**</span></div><div class='line' id='LC546'><span class="sd">	 * This method is fired when showing when priting an Order</span></div><div class='line' id='LC547'><span class="sd">	 * It displays the the payment method-specific data.</span></div><div class='line' id='LC548'><span class="sd">	 *</span></div><div class='line' id='LC549'><span class="sd">	 * @param integer $_virtuemart_order_id The order ID</span></div><div class='line' id='LC550'><span class="sd">	 * @param integer $method_id  method used for this order</span></div><div class='line' id='LC551'><span class="sd">	 * @return mixed Null when for payment methods that were not selected, text (HTML) otherwise</span></div><div class='line' id='LC552'><span class="sd">	 * @author Valerie Isaksen</span></div><div class='line' id='LC553'><span class="sd">	 */</span></div><div class='line' id='LC554'>	<span class="k">function</span> <span class="nf">plgVmonShowOrderPrintPayment</span><span class="p">(</span><span class="nv">$order_number</span><span class="p">,</span> <span class="nv">$method_id</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC555'>		<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">onShowOrderPrint</span><span class="p">(</span><span class="nv">$order_number</span><span class="p">,</span> <span class="nv">$method_id</span><span class="p">);</span></div><div class='line' id='LC556'>	<span class="p">}</span></div><div class='line' id='LC557'><br/></div><div class='line' id='LC558'>	<span class="sd">/**</span></div><div class='line' id='LC559'><span class="sd">	 * Save updated order data to the method specific table</span></div><div class='line' id='LC560'><span class="sd">	 *</span></div><div class='line' id='LC561'><span class="sd">	 * @param array $_formData Form data</span></div><div class='line' id='LC562'><span class="sd">	 * @return mixed, True on success, false on failures (the rest of the save-process will be</span></div><div class='line' id='LC563'><span class="sd">	 * skipped!), or null when this method is not actived.</span></div><div class='line' id='LC564'><span class="sd">	 * @author Oscar van Eijk</span></div><div class='line' id='LC565'><br/></div><div class='line' id='LC566'><span class="sd">	 public function plgVmOnUpdateOrderPayment(  $_formData) {</span></div><div class='line' id='LC567'><span class="sd">	 return null;</span></div><div class='line' id='LC568'><span class="sd">	 }</span></div><div class='line' id='LC569'><span class="sd">	 */</span></div><div class='line' id='LC570'>	<span class="sd">/**</span></div><div class='line' id='LC571'><span class="sd">	 * Save updated orderline data to the method specific table</span></div><div class='line' id='LC572'><span class="sd">	 *</span></div><div class='line' id='LC573'><span class="sd">	 * @param array $_formData Form data</span></div><div class='line' id='LC574'><span class="sd">	 * @return mixed, True on success, false on failures (the rest of the save-process will be</span></div><div class='line' id='LC575'><span class="sd">	 * skipped!), or null when this method is not actived.</span></div><div class='line' id='LC576'><span class="sd">	 * @author Oscar van Eijk</span></div><div class='line' id='LC577'><br/></div><div class='line' id='LC578'><span class="sd">	 public function plgVmOnUpdateOrderLine(  $_formData) {</span></div><div class='line' id='LC579'><span class="sd">	 return null;</span></div><div class='line' id='LC580'><span class="sd">	 }</span></div><div class='line' id='LC581'><span class="sd">	 */</span></div><div class='line' id='LC582'>	<span class="sd">/**</span></div><div class='line' id='LC583'><span class="sd">	 * plgVmOnEditOrderLineBE</span></div><div class='line' id='LC584'><span class="sd">	 * This method is fired when editing the order line details in the backend.</span></div><div class='line' id='LC585'><span class="sd">	 * It can be used to add line specific package codes</span></div><div class='line' id='LC586'><span class="sd">	 *</span></div><div class='line' id='LC587'><span class="sd">	 * @param integer $_orderId The order ID</span></div><div class='line' id='LC588'><span class="sd">	 * @param integer $_lineId</span></div><div class='line' id='LC589'><span class="sd">	 * @return mixed Null for method that aren&#39;t active, text (HTML) otherwise</span></div><div class='line' id='LC590'><span class="sd">	 * @author Oscar van Eijk</span></div><div class='line' id='LC591'><br/></div><div class='line' id='LC592'><span class="sd">	 public function plgVmOnEditOrderLineBE(  $_orderId, $_lineId) {</span></div><div class='line' id='LC593'><span class="sd">	 return null;</span></div><div class='line' id='LC594'><span class="sd">	 }</span></div><div class='line' id='LC595'><span class="sd">	 */</span></div><div class='line' id='LC596'><br/></div><div class='line' id='LC597'>	<span class="sd">/**</span></div><div class='line' id='LC598'><span class="sd">	 * This method is fired when showing the order details in the frontend, for every orderline.</span></div><div class='line' id='LC599'><span class="sd">	 * It can be used to display line specific package codes, e.g. with a link to external tracking and</span></div><div class='line' id='LC600'><span class="sd">	 * tracing systems</span></div><div class='line' id='LC601'><span class="sd">	 *</span></div><div class='line' id='LC602'><span class="sd">	 * @param integer $_orderId The order ID</span></div><div class='line' id='LC603'><span class="sd">	 * @param integer $_lineId</span></div><div class='line' id='LC604'><span class="sd">	 * @return mixed Null for method that aren&#39;t active, text (HTML) otherwise</span></div><div class='line' id='LC605'><span class="sd">	 * @author Oscar van Eijk</span></div><div class='line' id='LC606'><br/></div><div class='line' id='LC607'><span class="sd">	 public function plgVmOnShowOrderLineFE(  $_orderId, $_lineId) {</span></div><div class='line' id='LC608'><span class="sd">	 return null;</span></div><div class='line' id='LC609'><span class="sd">	 }</span></div><div class='line' id='LC610'><span class="sd">	 */</span></div><div class='line' id='LC611'>	<span class="k">function</span> <span class="nf">plgVmDeclarePluginParamsPayment</span><span class="p">(</span><span class="nv">$name</span><span class="p">,</span> <span class="nv">$id</span><span class="p">,</span> <span class="o">&amp;</span><span class="nv">$data</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC612'>		<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">declarePluginParams</span><span class="p">(</span><span class="s1">&#39;payment&#39;</span><span class="p">,</span> <span class="nv">$name</span><span class="p">,</span> <span class="nv">$id</span><span class="p">,</span> <span class="nv">$data</span><span class="p">);</span></div><div class='line' id='LC613'>	<span class="p">}</span></div><div class='line' id='LC614'><br/></div><div class='line' id='LC615'>	<span class="k">function</span> <span class="nf">plgVmSetOnTablePluginParamsPayment</span><span class="p">(</span><span class="nv">$name</span><span class="p">,</span> <span class="nv">$id</span><span class="p">,</span> <span class="o">&amp;</span><span class="nv">$table</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC616'>		<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">setOnTablePluginParams</span><span class="p">(</span><span class="nv">$name</span><span class="p">,</span> <span class="nv">$id</span><span class="p">,</span> <span class="nv">$table</span><span class="p">);</span></div><div class='line' id='LC617'>	<span class="p">}</span></div><div class='line' id='LC618'><br/></div><div class='line' id='LC619'><span class="p">}</span></div><div class='line' id='LC620'><br/></div><div class='line' id='LC621'><span class="c1">// No closing tag</span></div></pre></div>
            </td>
          </tr>
        </table>
  </div>

  </div>
</div>

<a href="#jump-to-line" rel="facebox[.linejump]" data-hotkey="l" class="js-jump-to-line" style="display:none">Jump to Line</a>
<div id="jump-to-line" style="display:none">
  <form accept-charset="UTF-8" class="js-jump-to-line-form">
    <input class="linejump-input js-jump-to-line-field" type="text" placeholder="Jump to line&hellip;" autofocus>
    <button type="submit" class="button">Go</button>
  </form>
</div>

        </div>

      </div><!-- /.repo-container -->
      <div class="modal-backdrop"></div>
    </div><!-- /.container -->
  </div><!-- /.site -->


    </div><!-- /.wrapper -->

      <div class="container">
  <div class="site-footer">
    <ul class="site-footer-links right">
      <li><a href="https://status.github.com/">Status</a></li>
      <li><a href="http://developer.github.com">API</a></li>
      <li><a href="http://training.github.com">Training</a></li>
      <li><a href="http://shop.github.com">Shop</a></li>
      <li><a href="/blog">Blog</a></li>
      <li><a href="/about">About</a></li>

    </ul>

    <a href="/">
      <span class="mega-octicon octicon-mark-github"></span>
    </a>

    <ul class="site-footer-links">
      <li>&copy; 2013 <span title="0.10483s from github-fe115-cp1-prd.iad.github.net">GitHub</span>, Inc.</li>
        <li><a href="/site/terms">Terms</a></li>
        <li><a href="/site/privacy">Privacy</a></li>
        <li><a href="/security">Security</a></li>
        <li><a href="/contact">Contact</a></li>
    </ul>
  </div><!-- /.site-footer -->
</div><!-- /.container -->


    <div class="fullscreen-overlay js-fullscreen-overlay" id="fullscreen_overlay">
  <div class="fullscreen-container js-fullscreen-container">
    <div class="textarea-wrap">
      <textarea name="fullscreen-contents" id="fullscreen-contents" class="js-fullscreen-contents" placeholder="" data-suggester="fullscreen_suggester"></textarea>
          <div class="suggester-container">
              <div class="suggester fullscreen-suggester js-navigation-container" id="fullscreen_suggester"
                 data-url="/craigchristenson/2CO_VirtueMart2/suggestions/commit">
              </div>
          </div>
    </div>
  </div>
  <div class="fullscreen-sidebar">
    <a href="#" class="exit-fullscreen js-exit-fullscreen tooltipped leftwards" title="Exit Zen Mode">
      <span class="mega-octicon octicon-screen-normal"></span>
    </a>
    <a href="#" class="theme-switcher js-theme-switcher tooltipped leftwards"
      title="Switch themes">
      <span class="octicon octicon-color-mode"></span>
    </a>
  </div>
</div>



    <div id="ajax-error-message" class="flash flash-error">
      <span class="octicon octicon-alert"></span>
      <a href="#" class="octicon octicon-remove-close close ajax-error-dismiss"></a>
      Something went wrong with that request. Please try again.
    </div>

  </body>
</html>

