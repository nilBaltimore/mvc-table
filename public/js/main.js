

var table = new Tabulator("#example-table", {
    //data:dataset,
    layout:"fitDataFill",      //fit columns to width of table
	responsiveLayout:"hide",  //hide columns that dont fit on the table
	tooltips:true,            //show tool tips on cells
	addRowPos:"top",          //when adding a new row, add it to the top of the table
	history:true,             //allow undo and redo actions on the table
	pagination:"local",       //paginate the data
	paginationSize:7,         //allow 7 rows per page of data
	movableColumns:true,      //allow column order to be changed
    resizableRows:true,       //allow row order to be changed
    persistenceMode:"cookie", //store persistence information in a cookie
    persistentLayout:true,      //Enable column layout persistence
    persistentSort:true, //Enable sort persistence
    persistentFilter:true, //Enable filter persistence
	initialSort:[             //set the initial sort order of the data
		{column:"codeid", dir:"asc"},
	],
	columns:[                 //define the table columns
		{title:"Code Id", field:"codeid", editor:false, cellClick: function (e, cell) {console.log(cell._cell.value)}},
		{title:"First Name", field:"firstname", align:"left", editor:"input"},
		{title:"Last Name", field:"lastname", editor:"input"},
	],
});

table.setData("http://localhost:8050/mvc-table/api/students")


// initialize
grid = new cheetahGrid.ListGrid({
    // Parent element on which to place the grid
    parentElement: document.querySelector('.grid-sample'),
    // Header definition
    header: [
        {field: 'check', caption: '', width: 50, columnType: 'check', action: 'check'},
        {field: 'codeid', caption: 'CodeId', width: 100},
        {field: 'firstname', caption: 'First Name', width: 200},
        {field: 'lastname', caption: 'Last Name', width: 200},
      
    ],
    // Array data to be displayed on the grid
    records: fetch("http://localhost:8050/mvc-table/api/students")
                .then(function(response) {
                    if(response.ok) {
                        return response.json()
                    } else {
                        throw "Error en la llamada"
                    }
                }).then(function(students) {
                    //console.log(students)
                    grid.records =  students
                }).catch(function(error) {
                    console.log(error)
                }),
    // Column fixed position
    frozenColCount: 2,
  });


  