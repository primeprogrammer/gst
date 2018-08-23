<style>
.li{margin:10px;}
a{
color:white;
text-decoration:none;
}
.divanim
{
background-color:#0095ff;
padding:10px;
border-radius:5px;
color:white;
text-decoration: none;
transition:1s;

-webkit-animation: mymove 2s; /* Safari 4.0 - 8.0 */
    animation: mymove 2s ;
}
.divanim:hover
{
   -ms-transform: scale(1,1.2); /* IE 9 */
    -webkit-transform: scale(1,1.2); /* Safari */
    transform: scale(1,1.2); /* Standard syntax */
opacity:0.5;
transition:1s;
}

.divanim1
{
background-color:#0095ff;
padding:10px;
border-radius:5px;
color:white;
text-decoration: none;
transition:2s;
-webkit-animation: mymove 2s; /* Safari 4.0 - 8.0 */
    animation: mymove 2s ;
}
.divanim1:hover
{
      rotation-point:10% 10%; 
    -ms-transform: rotate(-15deg); /* IE 9 */
    -webkit-transform: rotate(-15deg); /* Safari */
    transform: rotate(-15deg); /* Standard syntax */
	-webkit-transform-style: preserve-3d; /* Chrome, Safari, Opera */
	transform-style: preserve-3d;
	
opacity:0.5;
transition:1s;
}

@-webkit-keyframes mymove {
    from {padding: 100px;}
    to {padding: 10px;}
}

@keyframes mymove {
    from {padding: 100px;}
    to {padding: 10px;}
}
</style>

<section id="content">
				<div class="padding">
					<div class="wrapper p4">
						<div class="col-3">
							<div class="indent">
								<h2>Download</h2>
								<?php foreach ($dataDownload3 as $dataDownload4)
								{
								$check=0;
								foreach($dataDownload1 as $dataDownload)
								{
								if($check == 0)
										{ echo "<span>".$dataDownload4."</span>"; }
								if($dataDownload4 == $dataDownload['Download']['category'])
								{
								 
								echo '<div class="news indent-bot2 " style="margin:20px;">
									<time class="tdate-2" datetime="2011-05-22">&nbsp;</time>
									<p class="p1"><div class="divanim"><a href="#">'.$dataDownload["Download"]["title"].'</a> '.$this->Form->postLink("Click Here", array('controller'=>'downloads','action'=>'downloadfiles', $dataDownload["Download"]["id"], 'admin' => false)).'
			</div></p>
								</div>';
								
								} 
								$check++;
								} }?>
							</div>
						</div>
						<div class="col-4">
							<div class="block-news">
								<h3 class="color-4 p2">Services</h3>
								<div class="wrapper indent-bot">
									<ul class="list-2">
									<?php foreach($dataService1 as $dataService): ?>
										<li><div class="li divanim1"><a href="#"><?php echo $dataService['Service']['title']; ?></a></div></li>
										
										<?php endforeach; ?>
									</ul>
								</div>
								<a class="button-2" href="/Pages/frontourservices/id:page3">More..</a>
							</div>
						</div>
					</div>
					<div class="box-bg">
						<?php echo $this->element('shortview'); ?>
					</div>
				</div>
			</section>