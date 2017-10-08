
<input type=text id=op1 value=11001100><br>
<input type=radio name=operation id=operation value=sum checked>SUM
<input type=radio name=operation id=operation value=sub>SUB
<input type=radio name=operation id=operation value=mul>MUL
<input type=radio name=operation id=operation value=div>DIV
<br>
<input type=text id=op2 value=00000100><br>
<input type=button id=getAnswer value=GetAnswer onclick=getAnswer()>

<div style="float:right;border:1px solid green; height:500px;width:500px;" id=answer>



</div>


<script>
answer=document.getElementById("answer");
function createTable(row,column,op1,op2){
	tbl=document.createElement("table");
	tbl.border="1";
	tbl.cellPadding="2";
	tbl.cellSpacing="0";
	answer.appendChild(tbl);
	tr=[];
	td=[];
	ind=0;
	for(i=0;i<row;i++){
		tr[i]=document.createElement("tr");
		tbl.appendChild(tr[i]);
		for(j=0;j<column;j++){
			td[ind]=document.createElement("td");
			tr[i].appendChild(td[ind]);
			ind++;
		}
	}
}
function getAnswer(){
	op1=document.getElementById("op1").value;
	op2=document.getElementById("op2").value;
	col=Math.max(op1.length,op2.length);
	row=6;
	createTable(row,col,op1,op2);
	for(x=col*2;x<col*3;x++){
		td[x].innerHTML=op1[x-col*2];
	}
	for(x=col*3;x<col*4;x++){
		td[x].innerHTML=op2[x-col*3];
	}
	k=0;
	for(x=col*4;x<col*5;x++){
		sm=vtd(x-col)+vtd(x-col*2)+vtd(x-col*1);
		if(sm>1){
			td[(x-col*3)-1].innerHTML=1;
			sm=1;
		}
		td[x].innerHTML=sm;
		k++;
	}
	
	
	
}
function vtd(j){
	return parseInt(td[j].innerHTML);
}

</script>