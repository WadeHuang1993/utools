<div class="col-md-2 text-left">
    <div class="well">
        <h4>How to use it:</h4>
        <p></p>
        <ul class="step">
            <li><p>Fill in the first textarea with your text</p></li>
            <li><p>Click the <strong>Find</strong> or <strong>Remove</strong> button to show or remove the same words
                </p></li>
            <li><p>Get execution results</p></li>
        </ul>
    </div>
</div>

<div class="col-sm-8 text-left">

    <h1><?= $title ?></h1>
    <p><strong>Find duplicate words</strong> is a tool that make you <strong> find duplicate words</strong> from a long
        list or text easily.<br/>
        Using <strong>Find duplicate words</strong>, you can pick out the repeated words, or remove the words.<br/>
        While picking out repeated words, this tool will calculate how many times the words are repeated.</p>
    <hr/>
    <textarea rows="8" class='form-control right source'>
      </textarea>
    <div class="container-fluid margin-5">
        <div class="col-md-12 text-center">
            <!--           <input type="button" class="btn btn-success search" value="Find Same Words" />
                      <input type="button" class="btn btn-danger delete" value="Remove Same Words" />
             -->
            <input type="button" class="btn btn-success search" value="Find Same Words"/>
            <input type="button" class="btn btn-danger delete" value="Remove Same Words"/>
            <input type="button" class="btn btn-info clear" value="Clear"/>
            Separator:
            <select class="" id="sign" style="width: 100px;">
                <option value=" ">space(" ")</option>
                <option value=",">dot(",")</option>
                <option value=";">Semicolon(";")</option>
            </select>
        </div>
    </div>
    <textarea rows="8" class='form-control right result'>
      </textarea>

    <script>
        $(function () {
            $('.clear').on('click', function () {
                $('.source').val('');
                $('.result').val('');
            });

            $('.delete').on('click', function () {
                var str = $('.source').val(),
                    sign = $('#sign').val(),
                    str_ary = str.split(sign);

                var result = str_ary.filter(function (element, index, str_ary) {
                    return str_ary.indexOf(element) === index;
                });

                $('.result').val(result.join(sign));
            });

            $('.search').on('click', function () {
                var str = $('.source').val(),
                    sign = $('#sign').val(),
                    str_ary = str.split(sign);

                var result = str_ary.filter(function (element, index, str_ary) {
                    return str_ary.indexOf(element) !== index;
                });

                result = result.filter(function (element, index, result) {
                    return result.indexOf(element) === index;
                });

                $('.result').val(result.join(sign));
            });
        })
    </script>
