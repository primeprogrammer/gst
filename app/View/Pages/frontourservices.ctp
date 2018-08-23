<section id="content">
				<div class="padding">
					<div class="indent">
						<h2>Our Services</h2>
						<?php $countdata=count($dataService1); 
						$count=0;
						while($count <= $countdata-1)
						{
						echo '<div class="wrapper" style="margin-top:20px; margin-bottom:20px;">';
							echo '<div class="col-3">
								<div class="wrapper">
									<figure class="img-indent4"><img src="/images/page3-img1.png" alt="" /></figure>
									<div class="extra-wrap">
										<h6>'.$dataService1[$count]["Service"]["title"].'</h6>
										'.strip_tags(html_entity_decode($dataService1[$count]["Service"]["description"])).'
										
									</div>
								</div>
							</div>';
							$count++;
							if(!empty($dataService1[$count]["Service"]))
							{
							echo '<div class="col-4">
								<div class="wrapper">
									<figure class="img-indent3"><img src="/images/page3-img2.png" alt="" /></figure>
									<div class="extra-wrap">
										<h6>'.$dataService1[$count]["Service"]["title"].'</h6>
										_'.strip_tags(html_entity_decode($dataService1[$count]["Service"]["description"])).'
									</div>
								</div>
							</div>';
							}
						echo '</div>';
					$count++; } ?>
					</div>
					<div class="box-bg">
						<?php echo $this->element('shortview'); ?>
					</div>
				</div>
			</section>