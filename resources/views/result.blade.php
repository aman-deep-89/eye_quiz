@extends('layouts.layout')

@section('pageStyles')
<link rel="stylesheet" href="{{asset('css/font-awesome.min.css') }}" />
<link rel="stylesheet" href="{{asset('css/bars-square.css') }}" />
@endsection
@section('content')


<section class="content m-auto container">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <img src="{{asset('images/logo.png')}}" />
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <h3 class="mb-2">Company Name</h3>
                    <p>Address and Contact Detail</p>
                </div>
            </div>
        </div>
        <div class="container-fluid">                     
            <!-- Advanced Form Example With Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <?php
                        $cat_scores=array('Red'=>0,'Maroon'=>0,'Orange'=>0,'Green'=>0,'Purple'=>0,'Yellow'=>0,'Pink'=>0,'Blue'=>0);
                            if($answers) {                               
                                $lf_colors=$rf_colors=$primary_colors=array();
                                $cat_scores=array();
                                //print_r($answers);
                                foreach($answers as $answer) {
                                   if(isset($cat_scores[$answer->questions->color_code])) {
                                    $cat_scores[$answer->questions->color_code]+=$answer->answer_text;
                                   }
                                    else  {
                                        $cat_scores[$answer->questions->color_code]=$answer->answer_text;
                                    }
                                }
                            }                            
                        ?>
                        <div class="row personal_detail">
                            @if($user_detail)
                            <div class="col-md-12">
                                <p>SM Samarth Personal Details</p>
                                <div class="row">
                                    <div class="col-md-3">Name</div>
                                    <div class="col-md-9">{{$user_detail->name}}</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">Guardian Name</div>
                                    <div class="col-md-9">{{$user_detail->guardian_name}}</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">Date of Birth</div>
                                    <div class="col-md-9">{{$user_detail->birth_date}}</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">Gender</div>
                                    <div class="col-md-9">{{$user_detail->gender}}</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">Contact No</div>
                                    <div class="col-md-9">{{$user_detail->contact_no}}</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">Email ID</div>
                                    <div class="col-md-9">{{$user_detail->email_id}}</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">Address</div>
                                    <div class="col-md-9">{{$user_detail->address}}</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12"><p><b>Disclaimer:</b> The results obtained in this report are based on analysis of drown Color Theory samples submitted to us by the individual out of his/her will and consent to undergo such analysis, or the student under supervision and permission of his parents or guardian. The content of this analysis are only for reference basis on the scientific research which is under process. The decision to follow any instruction, advice, suggestion or recommendation completely depends upon you and you will be solely responsible for the consequences of the same. We as an organization or any of its representatives are not responsible for any consequences under any circumstance. Before taking any crucial decision please refer to your family doctor.<br/>
                                    <b> Please note that this report can be best interpreted only by drown certified analyst</b></p></div>
                                </div>
                            </div>
                            @endif
                        </div>
                        <?php
                            $color_total=array_sum($cat_scores);                                                        
                            $red_percent=round($cat_scores['Red']/$color_total*100,2);
                            $maroon_percent=round($cat_scores['Maroon']/$color_total*100,2);
                            $orange_percent=round($cat_scores['Orange']/$color_total*100,2);
                            $green_percent=round($cat_scores['Green']/$color_total*100,2);
                            $purple_percent=round($cat_scores['Purple']/$color_total*100,2);
                            $yellow_percent=round($cat_scores['Yellow']/$color_total*100,2);
                            $pink_percent=round($cat_scores['Pink']/$color_total*100,2);
                            $blue_percent=round($cat_scores['Blue']/$color_total*100,2);
                            
                            $lf_color_total=$cat_scores['Red']+$cat_scores['Maroon']+$cat_scores['Orange']+$cat_scores['Green'];
                            $rf_color_total=$cat_scores['Purple']+$cat_scores['Yellow']+$cat_scores['Pink']+$cat_scores['Blue'];
                            $lf_percent=round($lf_color_total/$color_total*100,2);
                            $rf_percent=round($rf_color_total/$color_total*100,2);

                            $primary_color_total=$cat_scores['Orange']+$cat_scores['Pink']+$cat_scores['Red']+$cat_scores['Purple'];
                            $p_orange_percent=round($cat_scores['Orange']/$primary_color_total*100,2);
                            $p_pink_percent=round($cat_scores['Pink']/$primary_color_total*100,2);
                            $p_red_percent=round($cat_scores['Red']/$primary_color_total*100,2);
                            $p_purple_percent=round($cat_scores['Purple']/$primary_color_total*100,2);

                            $s_yellow_green=$cat_scores['Yellow']+$cat_scores['Green'];
                            $s_maroon_blue=$cat_scores['Maroon']+$cat_scores['Blue'];
                            $sh_purple_green=$cat_scores['Purple']+($cat_scores['Green']*0.5)+($cat_scores['Pink']*0.5);
                            $s_color_shades=$s_yellow_green+$s_maroon_blue+$sh_purple_green;
                            $p_yellow_green=round($s_yellow_green/$s_color_shades*100,2);
                            $p_maroon_blue=round($s_maroon_blue/$s_color_shades*100,2);
                            $ph_purple_green=round($sh_purple_green/$s_color_shades*100,2);

                            $sh_orange_purple=$cat_scores['Orange']+($cat_scores['Purple']*0.5)+($cat_scores['Pink']*0.5);
                            $s_red_maroon=$cat_scores['Red']+$cat_scores['Maroon'];
                            $s_purple_green=$cat_scores['Purple']+$cat_scores['Green'];
                            $total_color_wheel=$sh_orange_purple+$s_red_maroon+$s_purple_green+$s_yellow_green+$s_maroon_blue;
                            $ph_orange_purple=round($sh_orange_purple/$total_color_wheel*100,2);
                            $p_red_maroon=round($s_red_maroon/$total_color_wheel*100,2);
                            $p_purple_green=round($s_purple_green/$total_color_wheel*100,2);
                            $p_blue_maroon=round($s_maroon_blue/$total_color_wheel*100,2);
                            $p_green_yellow=round($s_yellow_green/$total_color_wheel*100,2);

                            $s_od_colors=$cat_scores['Red']+($cat_scores['Green']*0.5)+($cat_scores['Maroon']*0.5);
                            $s_cd_colors=$cat_scores['Orange']+$cat_scores['Pink'];
                            $s_od_cd=$s_od_colors+$s_cd_colors;
                            $p_od_colors=round($s_od_colors/$s_od_cd*100,2);
                            $p_cd_colors=round($s_cd_colors/$s_od_cd*100,2);

                            $s_rmg=($cat_scores['Red']+$cat_scores['Maroon']+$cat_scores['Green'])/10;
                            $s_ymrb=($cat_scores['Yellow']+$cat_scores['Maroon']+($cat_scores['Red']*0.5)+($cat_scores['Blue']*0.5))/10;
                            $s_rgmop=($cat_scores['Red']+$cat_scores['Green']*0.5+$cat_scores['Maroon']*0.5+$cat_scores['Orange']*0.5+$cat_scores['Pink']*0.5)/10;
                            $s_pomgr=($cat_scores['Red']+$cat_scores['Green']*0.5+$cat_scores['Maroon']*0.5+$cat_scores['Orange']*0.5+$cat_scores['Purple']*0.5)/10;
                            $s_ryog=($cat_scores['Red']+$cat_scores['Yellow']+($cat_scores['Orange']*0.6)+($cat_scores['Green']*0.4))/10;
                            $s_pmr=($cat_scores['Pink']+$cat_scores['Maroon']+$cat_scores['Red'])/10;
                            $s_rgp=($cat_scores['Red']+$cat_scores['Green']+$cat_scores['Purple'])/10;
                            $s_rgy=($cat_scores['Red']+$cat_scores['Green']+$cat_scores['Yellow'])/10;
                            $s_rgyp=($cat_scores['Red']+$cat_scores['Green']+($cat_scores['Yellow']*0.5)+($cat_scores['Purple']*0.5))/10;
                            $s_gyr=($cat_scores['Green']+$cat_scores['Yellow']+$cat_scores['Red'])/10;
                            $s_pro=($cat_scores['Purple']+$cat_scores['Red']+$cat_scores['Orange'])/10;
                            $s_mor=($cat_scores['Maroon']+$cat_scores['Orange']+$cat_scores['Red'])/10;
                            $s_mpb=($cat_scores['Maroon']+$cat_scores['Pink']+$cat_scores['Blue'])/10;
                            $s_bpm=($cat_scores['Blue']+$cat_scores['Pink']+$cat_scores['Maroon'])/10;
                            $s_ymp=($cat_scores['Yellow']+$cat_scores['Maroon']+$cat_scores['Pink'])/10;
                            $s_opm=($cat_scores['Orange']+$cat_scores['Pink']+$cat_scores['Maroon'])/10;
                            $s_mrop=($cat_scores['Maroon']+$cat_scores['Red']+($cat_scores['Orange']*0.7)+($cat_scores['Pink']*0.3))/10;

                            $s_enr_ray_caught=$s_lsf_lab_ray=$cat_scores['Red']+$cat_scores['Yellow']+$cat_scores['Green'];
                            $s_green_ray=$cat_scores['Red']+$cat_scores['Purple']+$cat_scores['Green'];
                            $s_bnb_light_ray=$cat_scores['Orange']+$cat_scores['Red']*0.7+$cat_scores['Maroon']*0.7+$cat_scores['Pink']*0.6;
                            $s_ed_light_ray=$cat_scores['Maroon']+$cat_scores['Pink']+$cat_scores['Blue'];
                            $s_blue_ray=$cat_scores['Blue']+$cat_scores['Purple']+$cat_scores['Yellow'];
                            $pa_color_composition_tmp=array('Blue_Ray'=>$s_blue_ray,'Green_Ray'=>$s_green_ray,'Ed_Light_Ray'=>$s_ed_light_ray,'ENR_Ray'=>$s_enr_ray_caught,'BNB_Light'=>$s_bnb_light_ray,'LFS_Ray'=>$s_lsf_lab_ray);
                            $pa_color_composition=array();
                            foreach($pa_color_composition_tmp as $key=>$pa_color) {
                                $color_sum=$pa_color<=0 ? 1 : $pa_color;
                                $pa_color_composition[$key]=($color_sum>=130 ? '*****' : ($color_sum>=115 ? '****' : ($color_sum>=100 ? '***' : ($color_sum>80 ? '**' : '*'))));
                            }
                            //print_r($pa_color_composition);
                            arsort($cat_scores);
                            $color_score=array();
                            $rank=1;
                            foreach($cat_scores as $key=>$val) {
                                $score=($rank<4 ? 5 : ($rank<7 ? 3 : 1));
                                //echo $key.'='.$val.'='.$rank.'='.$score.'<br/>';
                                $color_score[$key]=($rank<3 ? '*****' : ($rank<5 ? '****' : ($rank<7 ? '***' : ($rank<9 ? '**' : '*'))));
                                $rank++;
                            }
                            //print_r($color_score);
                        ?>
                        <div class="row">
                            <div class="col-md-12"><p>Overview of SM Samarth's Color Report </p>
                            <p class="text-center">8 Color composition</p>
                            <div class="row">
                                <div class="col-md-4">
                                    <table class="table">
                                        <tr><th>Red</th><td><?= $red_percent ?>%</td></tr>
                                        <tr><th>Maroon</th><td><?= $maroon_percent ?>%</td></tr>
                                        <tr><th>Orange</th><td><?= $orange_percent ?>%</td></tr>
                                        <tr><th>Green</th><td><?= $green_percent ?>%</td></tr>
                                    </table>
                                </div>
                                <div class="col-md-4">
                                    Image
                                </div>
                                <div class="col-md-4">
                                    <table class="table">
                                        <tr><th>Puple</th><td><?= $purple_percent ?>%</td></tr>
                                        <tr><th>Yellow</th><td><?= $yellow_percent ?>%</td></tr>
                                        <tr><th>Pink</th><td><?= $pink_percent ?>%</td></tr>
                                        <tr><th>Blue</th><td><?= $blue_percent ?>%</td></tr>
                                    </table>
                                </div>
                            </div>
                            <p class="text-center">LFT & RFT Dominance</p>
                            <div class="row">
                                <div class="col-md-4">
                                    <h3 class="text-center">Lft Color</h3>
                                    Image
                                    <h3 class="text-center"><?= $lf_percent ?>%</h3>
                                    <h2>Primary Colors</h2>
                                    <table class="table">
                                        <tr><th>Orange</th><td><?= $p_orange_percent ?>%</td></tr>
                                        <tr><th>Pink</th><td><?= $p_pink_percent ?>%</td></tr>
                                        <tr><th>Red</th><td><?= $p_red_percent ?>%</td></tr>
                                        <tr><th>Purple</th><td><?= $p_purple_percent ?>%</td></tr>
                                    </table>
                                </div>
                                <div class="col-md-4">
                                   &nbsp;
                                </div>
                                <div class="col-md-4">
                                    <h3 class="text-center">Rft Color</h3>
                                    Image
                                    <h3 class="text-center"><?= $rf_percent ?>%</h3>
                                    <h2>Color Shades</h2>
                                    <table class="table">
                                        <tr><th>Green &amp; Yellow</th><td><?= $p_yellow_green ?></td></tr>
                                        <tr><th>Maroon &amp; Blue</th><td><?= $p_maroon_blue ?></td></tr>
                                        <tr><th>Purple &amp; Green</th><td><?= $ph_purple_green ?></td></tr>
                                    </table>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="row color_wheel">
                            <div class="col-md-12">
                                <p class="text-center">SM Samarth's Wheel color composition</p>
                                <?= $ph_orange_purple ?><br/>
                                <?= $p_red_maroon ?><br/>
                                <?= $p_purple_green ?><br/>
                                <?= $p_blue_maroon ?><br/>
                                <?= $p_green_yellow ?><br/>
                            </div>
                        </div>
                        <div class="row color_wheel">
                            <div class="col-md-12">
                                <p class="text-center">OD and CD Colors of SM Samarth</p>
                                <div class="row">
                                    <div class="col-md-4"> &nbsp;</div>
                                    <div class="col-md-4"><h3>OD Colors</h3>
                                        <h2><?= $p_od_colors ?>%</h2>
                                    </div>
                                    <div class="col-md-4"><h3>CD Colors</h3><h2><?= $p_cd_colors ?>%</h2></div>
                                    <div class="col-md-12">
                                        <table class="table table-bordered">
                                            <tr><th>&nbsp;</th><th>OD Driven Colors</th></th>OD Driven Colors</th></tr>
                                            <tr><th rowspan="5">Characteristics</th><td>Highly OD Determined</td><td>Highly CD Imaginative</td></tr>
                                            <tr><td>High level OD Levels</td><td>High level on CD</td></tr>
                                            <tr><td>Bold Color Path</td><td>Highly cautious on CD Colors</td></tr>
                                            <tr><td>Let's try it it out with OD</td><td>Let's try out with CD Colors</td></tr>
                                            <tr><td>They tend to make OD Plan</td><td>They tend to make CDPlan</td></tr>
                                            <tr><td></td><td></td></tr>
                                            <tr><th rowspan="3">Remedies</th><td>Help them set Wheel Color Plan</td><td>Help them set 8 Colore Comp Plan</td></tr>
                                            <tr><td>Give Reasons to Set OD Colors</td><td>Give Reasons to Set CD Colors</td></tr>
                                            <tr><td>They learn most effectively when they are actively Plan od OD Colors</td><td>They learn most effectively when they are actively Plan od CD Colors</td></tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row color_wheel">
                            <div class="col-md-12">
                                <p class="text-center">8 Color composition of SM Samarth</p>
                            </div>
                        </div>
                        <div class="row color_wheel">
                            <div class="col-md-12">
                                <p class="text-center">3 plus 1 Color Composition of SM Samarth</p>
                                <?php
                                    $three_composition=array();
                                    $three_composition_tmp=array('MROP'=>$s_mrop,'OPM'=>$s_opm,'RGP'=>$s_rgp,'YMP'=>$s_ymp,'BPM'=>$s_bpm,'MOR'=>$s_mor,'PRO'=>$s_pro,'GYR'=>$s_gyr,'RGYP'=>$s_rgyp,'RGP'=>$s_rgp,'RGY'=>$s_rgy,'RGP'=>$s_rgp,'PMR'=>$s_pmr,'RYOG'=>$s_ryog,'POMGR'=>$s_pomgr,'RGMOP'=>$s_rgmop,'YMRB'=>$s_ymrb,'RMG'=>$s_rmg);
                                    foreach($three_composition_tmp as $key=>$three) {
                                        $three_composition[$key]=($three<=0) ? 1 : $three;
                                    }
                                    print_r($three_composition);
                                ?>
                            </div>
                        </div>
                        <div class="row color_wheel">
                            <div class="col-md-12">
                                <p class="text-center">Feasibility Color composition for SM Samarth</p>
                                <table class="table table-bordered">
                                    <tr><th>Category</th><th>Feasibility</th><th colspan="2">Relevant Color Compo</th><th>Post Processing</th></tr>
                                    <tr><th rowspan="3">Blue Ray</th><td rowspan="3"><?= $pa_color_composition['Blue_Ray'] ?></td><td>Blue</td><td><?= $color_score['Blue'] ?></td><td rowspan="3"> PTM<br/>SEM<br/>CDVR<br/>CYZ<br/>REF</td></tr>
                                    <tr><td>Purple</td><td><?= $color_score['Purple'] ?></td></tr>     
                                    <tr><td>Yellow</td><td><?= $color_score['Yellow'] ?></td></tr>     
                                    <tr><th rowspan="3">Green Ray</th><td rowspan="3"><?= $pa_color_composition['Green_Ray'] ?></td><td>Green</td><td><?= $color_score['Green'] ?></td><td rowspan="3">AE<br/>AR<br/>EOZP<br/>GNO<br/>WLR<br/>VFA</td></tr>     
                                    <tr><td>Purple</td><td><?= $color_score['Purple'] ?></td></tr>     
                                    <tr><td>Red</td><td><?= $color_score['Red'] ?></td></tr>     
                                    <tr><th rowspan="3">Ed Light Ray</th><td rowspan="3"><?= $pa_color_composition['Ed_Light_Ray'] ?></td><td>Maroon</td><td><?= $color_score['Maroon'] ?></td><td rowspan="3">APD<br/> FDID<br/> CEC<br/>SPPD</td></tr>
                                    <tr><td>Pink</td><td><?= $color_score['Pink'] ?></td></tr>
                                    <tr><td>Blue</td><td><?= $color_score['Blue'] ?></td></tr>
                                    <tr><th rowspan="3">ENR Ray caught</th><td rowspan="3"><?= $pa_color_composition['ENR_Ray'] ?></td><td>Yellow</td><td><?= $color_score['Yellow'] ?></td><td rowspan="3">AEM<br/> EEP<br/> EEYR<br/> MEKL<br/> ECBT<br/> CEYD</td></tr>
                                    <tr><td>Red</td><td><?= $color_score['Red'] ?></td></tr>
                                    <tr><td>Green</td><td><?= $color_score['Green'] ?></td></tr>
                                    <tr><th rowspan="3">BNB Light Ray</th><td rowspan="3"><?= $pa_color_composition['BNB_Light'] ?></td><td>Orange</td><td>**</td><td rowspan="3">GAW<br/> ERS<br/> SRWR<br/> RHPL<br/> CPAP<br/> GCPM</td></tr>
                                    <tr><td>Maroon</td><td><?= $color_score['Maroon'] ?>*</td></tr>
                                    <tr><td>Pink</td><td><?= $color_score['Pink'] ?></td></tr>
                                    <tr><th rowspan="3">LFS Lab Ray</th><td rowspan="3"><?= $pa_color_composition['LFS_Ray'] ?></td><td>Green</td><td><?= $color_score['Green'] ?></td><td rowspan="3">BPRM<br/>MTDK<br/> BAPR<br/>ZGED<br/>ARML</td></tr>
                                    <tr><td>Purple</td><td><?= $color_score['Purple'] ?></td></tr>
                                    <tr><td>Red</td><td><?= $color_score['Red'] ?></td></tr>
                                </table>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('pageScripts')
<script type="text/javascript">
$(function() {
    
});
</script>
@endsection