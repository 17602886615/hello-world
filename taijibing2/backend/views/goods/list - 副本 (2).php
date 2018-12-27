<!DOCTYPE html>
<html>
<head>
    <title>在售商品管理</title>
        <link rel="stylesheet" href="./static/css/chosen.css"/>
        <link rel="stylesheet" type="text/css" href="./static/css/conmones.css">
</head>

<style type="text/css" media="screen">
    #btnop{
        width:100%;
            display: inline-box;
            display: -webkit-inline-box;

    }
    #btnop p{
        margin:0;
        margin-left:10px;
        padding:5px 10px;
        background:#2D3136;
        border-radius: 5px ;
        color:#fff;
        margin-top:20px;
    }
    #btnop p:hover{
        background-color:#454a50;
    }
    .inp{
        width: 50px;
    line-height: 11px;
    margin-top: 10px;
    margin-left: 20px;
    height: 30px;
    display: inline-block;
    text-align: center;
    
;
    }
    input[type=submit]:hover{
            background-color: #d46d58;
    }

    td,th{
        padding:3px 5px;font-size:15px;
    }
</style>
<body>

    <div id="type_manage">

           <header>
           <form action="./index.php?r=goods/goods-list" method="post" accept-charset="utf-8">
                
        
              <div style="margin-bottom:10px;" class="condition"> 
                  <span style="padding-left:5px;display:inline-block"><label>商品分类:</label> 
                    <select  style="width:250px;" name='category1_id' id="type1" class="t  ype1"> 
                        <option value="">请选择</option>
                    </select>
                  </span>
                  <span style="padding-left:5px;display:inline-block"><label>商品品牌:</label> 
                    <select  style="width:250px;" name='brand_id'  id="type2" class="type2"> 
                        <option value="">请选择</option>
                    </select>

                  </span>

                  <span style="padding-left:5px;display:inline-block"><label>商品名称:</label> 
                    <select  style="width:250px;" name='goods_id'  id="type2" class="type2"> 
                        <option value="">请选择</option>
                    </select>

                  </span>



                <input class='inp' type="submit" style='width:50px; background-color: #E46045;border: none;color:#fff;' value="保存" >

<div id="btnop" class="">
                 <a href="./index.php?r=goods-type/add-goods-type" title=""><p class='Establish'>创建</p></a>
                <p class='Refresh' >刷新</p>
                 
           </div>


              </div>

             
            </form>

               
           </header>
           <div >
               <table style='width:100%;border-collapse:separate; border-spacing:0px 10px;'>    
                <thead>
                    <tr>
                        <th>序号</th>
                    
                        <th>商品分类</th>
                        <th>二级分类</th>
        
                        <th>添加时间</th>
                        <th>更新时间</th>
                        <th>修改</th>
                        <th>删除</th>
                    </tr>
                </thead>
                <tbody   style="">
                    <tr>
            
                    </tr>
                </tbody>
               </table>
           </div>   
       
    </div>

</body>
<script type="text/javascript" src="/static/js/jquery.min.js"></script>

 <script type="text/javascript" src="./static/js/chosen.jquery.min.js"></script>    
<script> 


</script>
</html>