function changtab_all(id,count,id_tab,id_content,cl_select,cl_nomal){
	for(i=1;i<=count;i++){
		document.getElementById(id_tab+i).className=cl_nomal;
		document.getElementById(id_content+i).style.display='none';
	}
	document.getElementById(id_tab+id).className=cl_select;
	document.getElementById(id_content+id).style.display='block';
}

function changtab(id,count){
	for(i=0;i<=count;i++){		
		try{
			document.getElementById('menu'+i).className='menulink_1';
			if(i==count) document.getElementById('menu'+i).className='menulink';
		}
		catch(e){}			
	}	
	document.getElementById('menu'+id).className='menu-active';
}
function showCommentProject(id){
	var $div = $('#'+id);		
	if($div.css("display")=='' || $div.css("display")=='none'){
		$('#'+id).fadeIn("slow");		
	}else{
		$('#'+id).fadeOut("slow");
	}	
}
