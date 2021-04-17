function getList(table_id, parent) {
    if ($(window).width() < 767) {
        var table_header = new Array();
        var table_data = new Array();
        i = 1;
        $(table_id + ' thead>tr').each(function() {
            var table_row = new Array();
            $('th', this).each(function() {
                table_row.push($(this).text());
            });
            table_header.push(table_row)
            i = i + 1;
        });

        $(table_id + ' tbody>tr').each(function() {
            var table_row = new Array();
            $('td', this).each(function() {
                table_row.push($(this).text());
            });
            table_data.push(table_row)
            i = i + 1;
        });

        $(table_id).attr('hidden', true);
        var list = '';
        for (r = 0; r < table_data.length; r++) {

            for (c = 0; c < table_data[r].length; c++) {
                list +=
                    '<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">' +
                    table_header[0][c] + " &nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp; " + table_data[r][c] + '</a><div class="flextable-spacer"></div>';
            }
            list += '<div class="flextable-spacer mt-3"></div>';
        }

        $(parent).html(list);
    }
}