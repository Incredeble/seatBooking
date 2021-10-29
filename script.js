// var seat = [[0,0,0,0,0,0,0,0],[0,1,2,3,4,5,6,7],[0,8,9,10,11,12,13,14],[0,15,16,17,18,19,20,21],[0,22,23,24,25,26,27,28],[0,29,30,31,32,33,34,35],[0,36,37,38,39,40,41,42],[0,43,44,45,46,47,48,49],[0,50,51,52,53,54,55,56],[0,57,58,59,60,61,62,63],[0,64,65,66,67,68,69,70],[0,71,72,73,74,75,76,77],[0,78,79,80,81,82,83,84]]
async function Booked(e) {
    await $.ajax({
        type:'POST',
        url:'ubookedseat.php',
        data:{e:e},
        dataType:'json',
        success:function(response){},
        error:function(er) {}
        });
}

function Update_RowSeat(i_idx, minn) {
    $.ajax({
    type:'POST',
    url:'updateRowSeat.php',
    data:{i_idx:i_idx , minn: minn},
    dataType:'json',
    success:function(response){},
    error:function(er) {}
    });
}

function bookSeat() {
    var n = document.getElementById("number").value;
    if(n<1) alert("Please enter number valid number");
    else if(n>7) alert("You can book maximum 7 seats at a time");
    else fetchData(n);
}

function fetchData(n) {
    fetch('database.json').then(response => { return response.json(); }).then(data => {
    var available_seat = data[0][0];
    if(available_seat<n) alert("Only "+available_seat+" seats are available");
    else {
        function min(a,b) {
            if(a<b) return a;
            return b; 
        }

        function Book(n) {
            var i=1,j=1;
            var i_idx=-1;
            var j_idx=-1;
            var maxx = 12;
            var sum = 0;
            while(j<13) {
                sum=sum+data[0][j];
                if(sum>=n) {
                    while(sum>=n) {
                        if(j-i+1<maxx) {
                            j_idx=j;
                            i_idx=i;
                            maxx = j-i+1;
                        }
                        sum=sum-data[0][i];
                        i++;
                    }
                }
                j++;
            }
            var seatBooked = new Array(n);
            var k=0;
            Update_AvailableSeat(n);
            while(n>0) {
                var minn = min(n,data[0][i_idx]);
                var mins = data[0][i_idx];
                Update_RowSeat(i_idx, minn)
                n=n-minn;
                if(i_idx==12) {
                    for(var i=3-mins+1;i<4;i++) {
                        seatBooked[k]=7*(i_idx-1)+i;
                        k++;
                    }
                }
                else {
                    for(var i=7-mins+1;i<8 && minn>0;i++,minn--) {
                        seatBooked[k]=7*(i_idx-1)+i;
                        k++;
                    }
                }
                i_idx++;
            }

            for(var i=0;i<n;i++) {
                Booked(seatBooked[i]);
            }
    
            alert("Seat Booked Succesfully"+'\n'+"Your seat number are"+'\n'+seatBooked);
        }
        Book(n);
    }
});
}


function Update_AvailableSeat(n) {
    $.ajax({
        type:'POST',
        url:'updateSeat.php',
        data:{n: n},
        dataType:'json',
        success:function(response){}
    });    
}



function RemainingSeat() {   
    fetch('database.json').then(response => { return response.json(); }).then(data => alert(data[0].available_seat));   
}

    