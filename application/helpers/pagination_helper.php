<?php
function  show_pagination($base_url, $total_nums,  $limit)
{
        $ci   = &get_instance();
        $config['base_url']         =  $base_url;
        $config['total_rows']      =  $total_nums;
        $config['per_page']        = $limit;
        $config['first_link'] = '首页'; // 第一页显示   
        $config['last_link'] = '末页'; // 最后一页显示   
        $config['next_link'] = '下一页'; // 下一页显示   
        $config['prev_link'] = '上一页'; // 上一页显示 
        $config['full_tag_open'] = '<div  class = "page_nav">';
        $config['full_tag_close'] = '</div>';
        $ci->pagination->initialize($config);
        return  $ci->pagination->create_links();
}
?>