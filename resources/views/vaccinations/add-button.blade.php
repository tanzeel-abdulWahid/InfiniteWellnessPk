<div class="dropdown">
    <a href="#" class="myBtnPrimary" id="dropdownMenuButton" data-bs-toggle="dropdown"
       aria-haspopup="true" aria-expanded="false">{{ __('messages.common.actions') }}
        <i class="fas fa-chevron-down"></i>
    </a>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <li>
            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#add_vaccinations_modal"
               class="dropdown-item  px-5">{{ __('messages.vaccination.new_vaccination')}}</a>
        </li>
        <li>
            <a href="{{ route('vaccinations.excel') }}"
               class="dropdown-item  px-5"
               target="_blank">{{ __('messages.common.export_to_excel') }}</a>
        </li>
    </ul>
</div>
