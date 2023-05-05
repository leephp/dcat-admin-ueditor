<div class="{{$viewClass['form-group']}}">

    <label class="{{$viewClass['label']}} control-label">{{$label}}</label>

    <div class="{{$viewClass['field']}}">

        @include('admin::form.error')

        <textarea id="{{$name}}">{!! old($column, $value) !!}</textarea>

        @include('admin::form.help-block')

    </div>
</div>

<script require="@ueditor">
    // 先销毁,不然会出现问题
    UE.delEditor('{{$name}}');
    UE.getEditor('{{$name}}', {
        initialFrameHeight: 500,
        serverUrl: "{{ route('dcat.admin.leephpg.ueditor.handle') }}",
    });
</script>
