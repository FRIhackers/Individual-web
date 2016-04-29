function setcurdate(start, end){
	var d;
	var s;
	if(start){
		if(end){
			d =new Date(end);
			s=new Date(start);
		}else{
			d =new Date(new Date(start).getTime() + 24 * 60 * 60 * 1000);
			s=new Date(start);
		}
	}
	else{
		if(end){
			d =new Date(end);
			s=new Date(new Date(end).getTime() - 24 * 60 * 60 * 1000);
		}else{
			d =new Date(new Date().getTime() + 24 * 60 * 60 * 1000);
			s=new Date();
		}
	}
	var df=document.getElementById("datefrom");
	var dt=document.getElementById("dateto");
	var day=d.getDate();
	var year=d.getFullYear();
	if(day<10){
		day="0"+day;
	}
	var month=d.getMonth()+1;
	if(month<10){
		month="0"+month;
	}
	year =year.toString().substr(2,2);
	dt.innerHTML = day+"/"+month+"/"+year;
	day=s.getDate();
	if(day<10){
		day="0"+day;
	}
	year=s.getFullYear();
	month=s.getMonth()+1;
	if(month<10){
		month="0"+month;
	}
	year =year.toString().substr(2,2);
	df.innerHTML = day+"/"+month+"/"+year;
}
function setcurdate2(start, end){
	var d;
	var s;
	if(start){
		if(end){
			d =new Date(end);
			s=new Date(start);
		}else{
			d =new Date(new Date(start).getTime() + 24 * 60 * 60 * 1000);
			s=new Date(start);
		}
	}
	else{
		if(end){
			d =new Date(end);
			s=new Date(new Date(end).getTime() - 24 * 60 * 60 * 1000);
		}else{
			d =new Date(new Date().getTime() + 24 * 60 * 60 * 1000);
			s=new Date();
		}
	}
	var df=document.getElementById("datefr");
	var dt=document.getElementById("datet");
	var day=d.getDate();
	var year=d.getFullYear();
	if(day<10){
		day="0"+day;
	}
	var month=d.getMonth()+1;
	if(month<10){
		month="0"+month;
	}
	year =year.toString().substr(2,2);
	dt.innerHTML = day+"/"+month+"/"+year;
	day=s.getDate();
	if(day<10){
		day="0"+day;
	}
	year=s.getFullYear();
	month=s.getMonth()+1;
	if(month<10){
		month="0"+month;
	}
	year =year.toString().substr(2,2);
	df.innerHTML = day+"/"+month+"/"+year;
}

