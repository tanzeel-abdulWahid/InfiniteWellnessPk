<div class="row">
    {{ Form::hidden('currency_symbol', getCurrentCurrency(), ['class' => 'currencySymbol']) }}
    <div class="col-md-4 col-sm-12">
        <div class="form-group mb-5">
            {!! Form::label('itemcategory_id', __('messages.item_stock.item_category').':', ['class' => 'form-label']) !!}
            <span class="required"></span>
            {{ Form::select('itemcategory_id', $itemCategories, $itemStock->itemcategory_id, ['id' => 'editStockItemCategory','class' => 'form-select stockCategory','required','placeholder' => 'Select Item Category', 'data-control' => 'select2']) }}
        </div>
    </div>
    <div class="col-md-4 col-sm-12">
        <div class="form-group mb-5">
            {!! Form::label('item_id', __('messages.item_stock.item').':', ['class' => 'form-label']) !!}
            <span class="required"></span>
            {{ Form::select('item_id', [null], $itemStock->item_id, ['id' => 'editStockItems','class' => 'form-select stockItems', 'required', 'disabled', 'placeholder' => 'Select Item']) }}
        </div>
    </div>
    <div class="col-md-4 col-sm-12">
        <div class="form-group mb-5">
            {!! Form::label('supplier_name', __('messages.item_stock.supplier_name').':', ['class' => 'form-label']) !!}
            {!! Form::text('supplier_name', null, ['id'=>'editStockSupplierName','class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-4 col-sm-12">
        <div class="form-group mb-5">
            {!! Form::label('store_name', __('messages.item_stock.store_name').':', ['class' => 'form-label']) !!}
            {!! Form::text('store_name', null, ['id'=>'editStockStoreName','class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-4 col-sm-12">
        <div class="form-group mb-5">
            {!! Form::label('quantity', __('messages.item_stock.quantity').':', ['class' => 'form-label']) !!}
            <span class="required"></span>
            {!! Form::number('quantity', null, ['id'=>'editStockQuantity','class' => 'form-control','required', 'onkeyup' => 'if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,"")', 'maxlength' => '4','minlength' => '1']) !!}
        </div>
    </div>
    <div class="col-md-4 col-sm-12">
        <div class="form-group mb-5">
            {!! Form::label('purchase_price', __('messages.item_stock.purchase_price').':', ['class' => 'form-label']) !!}
            <span class="required"></span>
            {!! Form::number('purchase_price', null, ['id'=>'editStockPurchasePrice','class' => 'form-control','required']) !!}
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="form-group mb-5">
            {{ Form::label('description', __('messages.item_stock.description').(':'), ['class' => 'form-label']) }}
            {{ Form::textarea('description', null, ['class' => 'form-control', 'rows' => 4]) }}
        </div>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
        <div class="form-group mb-5">
            <div class="row2" io-image-input="true">
                {{ Form::label('image',__('messages.document.attachment').(':'), ['class' => 'form-label']) }}
                <div class="d-block">
                    <?php
                    $style = 'style=';
                    $background = 'background-image:';
                    ?>

                    <div class="image-picker">
                        <div class="image previewImage" id="editStockPreviewImage"
                        {{$style}}"{{$background}} url('{{ !empty($itemStock->item_stock_url) ? $itemStock->item_stock_url : asset('assets/img/default_image.jpg') }}')">
                            <span class="picker-edit rounded-circle text-gray-500 fs-small" title="Change attachment">
                                <label>
                                    <i class="fa-solid fa-pen" id="profileImageIcon"></i>
                                    <input type="file" id="editStockAttachment" name="attachment"
                                           class="image-upload d-none stockAttachment" accept=".png, .jpg, .jpeg, .gif"/>
                                    <input type="hidden" name="avatar_remove"/>
                                </label>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-end">
        {!! Form::submit(__('messages.common.save'), ['class' => 'myBtnPrimary me-2', 'id' => 'editStockSave']) !!}
        <a href="{!! route('item.stock.index') !!}"
           class="myBtnSecondary me-2">{!! __('messages.common.cancel') !!}</a>
    </div>
</div>
