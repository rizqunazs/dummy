var handleBootstrapWizardsValidation = function () {
  "use strict";
  $('#project-wizard').smartWizard({
    selected: 0,
    theme: 'default',
    transitionEffect: '',
    transitionSpeed: 0,
    useURLhash: false,
    showStepURLhash: false,
    toolbarSettings: {
      toolbarPosition: 'bottom'
    },
    lang: {  // Language variables
      next: 'Selanjutnya',
      previous: 'Sebelumnya'
    },
  });

  $("#project-wizard").on("showStep", function (e, anchorObject, stepNumber, stepDirection) {
    if (anchorObject.prevObject.length - 1 == stepNumber) {
      handleProjectPreview();
    } else {
      $('#project-preview').html(''); //reset project preview
    }
  });

  $('#project-wizard').on('leaveStep', function (e, anchorObject, stepNumber, stepDirection) {
    if (stepDirection == 'backward') {
      return true;
    } // skip the code below on backward

    var form = $('form[name="project-form-wizard"]');
    // hide btn add pihak on jenis_form = 6(badan hukum)
    var selected = form.find(':input[name="jenis_form"]:checked').val();
    // show or hide detail project fields
    handleDetailProjectFields(selected);
    selected == '6' ? $('#btn-add-pihak').hide() : $('#btn-add-pihak').show();
    // form validation results
    var parsleyConfig = {
      errorsContainer: function (parsleyField) {
        var fieldset = parsleyField.$element.closest('fieldset');

        if (fieldset.length > 0) {
          return fieldset.find('#radio-boxed-errors');
        }

        return parsleyField;
      }
    };
    var res = form.parsley(parsleyConfig).validate('step-' + (stepNumber + 1));
    return res;
  });

  $('#project-wizard').keypress(function (e) {
    if (e.which == 13) {
      $('#project-wizard').smartWizard('next');
    }
  });
};

function handleDetailProjectFields(jenis_form) {
  "use strict";
  let nilai_transaksi, nilai_ht, plafond_hutang, kota, nama_direktur, modal_dasar, badan_ajuan, pendiri, badan_disetujui, notaris_partner;
  // elements
  nilai_transaksi = $('input#nilai_transaksi');
  nilai_ht = $('input#nilai_ht');
  plafond_hutang = $('input#plafond_hutang');
  kota = $('input#kota');
  nama_direktur = $('input#nama_direktur');
  modal_dasar = $('input#modal_dasar');
  badan_ajuan = $('input#badan_ajuan');
  pendiri = $('input#pendiri');
  badan_disetujui = $('input#badan_disetujui');
  notaris_partner = $('input#notaris_partner');

  switch (jenis_form) {
    case '1': //umum
      nilai_transaksi.closest('.form-group').show()
      nilai_transaksi.attr('data-parsley-required', true)
      nilai_ht.closest('.form-group').hide()
      nilai_ht.attr('data-parsley-required', false)
      nilai_ht.val('')
      plafond_hutang.closest('.form-group').hide()
      plafond_hutang.attr('data-parsley-required', false)
      plafond_hutang.val('')
      kota.closest('.form-group').hide()
      kota.attr('data-parsley-required', false)
      kota.val('')
      nama_direktur.closest('.form-group').hide()
      nama_direktur.attr('data-parsley-required', false)
      nama_direktur.val('')
      modal_dasar.closest('.form-group').hide()
      modal_dasar.attr('data-parsley-required', false)
      modal_dasar.val('')
      badan_ajuan.closest('.form-group').hide()
      badan_ajuan.attr('data-parsley-required', false)
      badan_ajuan.val('')
      pendiri.closest('.form-group').hide()
      pendiri.attr('data-parsley-required', false)
      pendiri.val('')
      badan_disetujui.closest('.form-group').hide()
      badan_disetujui.attr('data-parsley-required', false)
      badan_disetujui.val('')
      notaris_partner.closest('.form-group').hide()
      notaris_partner.attr('data-parsley-required', false)
      notaris_partner.val('')
      break;
    case '2': //bumn
      nilai_transaksi.closest('.form-group').show()
      nilai_transaksi.attr('data-parsley-required', true)
      nilai_ht.closest('.form-group').show()
      nilai_ht.attr('data-parsley-required', true)
      plafond_hutang.closest('.form-group').show()
      plafond_hutang.attr('data-parsley-required', true)
      kota.closest('.form-group').hide()
      kota.attr('data-parsley-required', false)
      kota.val('')
      nama_direktur.closest('.form-group').hide()
      nama_direktur.attr('data-parsley-required', false)
      nama_direktur.val('')
      modal_dasar.closest('.form-group').hide()
      modal_dasar.attr('data-parsley-required', false)
      modal_dasar.val('')
      badan_ajuan.closest('.form-group').hide()
      badan_ajuan.attr('data-parsley-required', false)
      badan_ajuan.val('')
      pendiri.closest('.form-group').hide()
      pendiri.attr('data-parsley-required', false)
      pendiri.val('')
      badan_disetujui.closest('.form-group').hide()
      badan_disetujui.attr('data-parsley-required', false)
      badan_disetujui.val('')
      notaris_partner.closest('.form-group').hide()
      notaris_partner.attr('data-parsley-required', false)
      notaris_partner.val('')
      break;
    case '3': //swasta
      nilai_transaksi.closest('.form-group').show()
      nilai_transaksi.attr('data-parsley-required', true)
      nilai_ht.closest('.form-group').show()
      nilai_ht.attr('data-parsley-required', true)
      plafond_hutang.closest('.form-group').show()
      plafond_hutang.attr('data-parsley-required', true)
      kota.closest('.form-group').hide()
      kota.attr('data-parsley-required', false)
      kota.val('')
      nama_direktur.closest('.form-group').hide()
      nama_direktur.attr('data-parsley-required', false)
      nama_direktur.val('')
      modal_dasar.closest('.form-group').hide()
      modal_dasar.attr('data-parsley-required', false)
      modal_dasar.val('')
      badan_ajuan.closest('.form-group').hide()
      badan_ajuan.attr('data-parsley-required', false)
      badan_ajuan.val('')
      pendiri.closest('.form-group').hide()
      pendiri.attr('data-parsley-required', false)
      pendiri.val('')
      badan_disetujui.closest('.form-group').hide()
      badan_disetujui.attr('data-parsley-required', false)
      badan_disetujui.val('')
      notaris_partner.closest('.form-group').hide()
      notaris_partner.attr('data-parsley-required', false)
      notaris_partner.val('')
      break;
    case '4': //konvensional
      nilai_transaksi.closest('.form-group').show()
      nilai_transaksi.attr('data-parsley-required', true)
      nilai_ht.closest('.form-group').show()
      nilai_ht.attr('data-parsley-required', true)
      plafond_hutang.closest('.form-group').show()
      plafond_hutang.attr('data-parsley-required', true)
      kota.closest('.form-group').hide()
      kota.attr('data-parsley-required', false)
      kota.val('')
      nama_direktur.closest('.form-group').hide()
      nama_direktur.attr('data-parsley-required', false)
      nama_direktur.val('')
      modal_dasar.closest('.form-group').hide()
      modal_dasar.attr('data-parsley-required', false)
      modal_dasar.val('')
      badan_ajuan.closest('.form-group').hide()
      badan_ajuan.attr('data-parsley-required', false)
      badan_ajuan.val('')
      pendiri.closest('.form-group').hide()
      pendiri.attr('data-parsley-required', false)
      pendiri.val('')
      badan_disetujui.closest('.form-group').hide()
      badan_disetujui.attr('data-parsley-required', false)
      badan_disetujui.val('')
      notaris_partner.closest('.form-group').hide()
      notaris_partner.attr('data-parsley-required', false)
      notaris_partner.val('')
      break;
    case '5': //mikro
      nilai_transaksi.closest('.form-group').show()
      nilai_transaksi.attr('data-parsley-required', true)
      nilai_ht.closest('.form-group').show()
      nilai_ht.attr('data-parsley-required', true)
      plafond_hutang.closest('.form-group').show()
      plafond_hutang.attr('data-parsley-required', true)
      kota.closest('.form-group').hide()
      kota.attr('data-parsley-required', false)
      kota.val('')
      nama_direktur.closest('.form-group').hide()
      nama_direktur.attr('data-parsley-required', false)
      nama_direktur.val('')
      modal_dasar.closest('.form-group').hide()
      modal_dasar.attr('data-parsley-required', false)
      modal_dasar.val('')
      badan_ajuan.closest('.form-group').hide()
      badan_ajuan.attr('data-parsley-required', false)
      badan_ajuan.val('')
      pendiri.closest('.form-group').hide()
      pendiri.attr('data-parsley-required', false)
      pendiri.val('')
      badan_disetujui.closest('.form-group').hide()
      badan_disetujui.attr('data-parsley-required', false)
      badan_disetujui.val('')
      notaris_partner.closest('.form-group').hide()
      notaris_partner.attr('data-parsley-required', false)
      notaris_partner.val('')
      break;
    case '6': //badan hukum
      nilai_transaksi.closest('.form-group').hide()
      nilai_transaksi.attr('data-parsley-required', false)
      nilai_transaksi.val('')
      nilai_ht.closest('.form-group').hide()
      nilai_ht.attr('data-parsley-required', false)
      nilai_ht.val('')
      plafond_hutang.closest('.form-group').hide()
      plafond_hutang.attr('data-parsley-required', false)
      plafond_hutang.val('')
      kota.closest('.form-group').show()
      kota.attr('data-parsley-required', true)
      nama_direktur.closest('.form-group').show()
      nama_direktur.attr('data-parsley-required', true)
      modal_dasar.closest('.form-group').show()
      modal_dasar.attr('data-parsley-required', true)
      badan_ajuan.closest('.form-group').show()
      badan_ajuan.attr('data-parsley-required', true)
      pendiri.closest('.form-group').show()
      pendiri.attr('data-parsley-required', true)
      badan_disetujui.closest('.form-group').show()
      badan_disetujui.attr('data-parsley-required', true)
      notaris_partner.closest('.form-group').hide()
      notaris_partner.attr('data-parsley-required', false)
      notaris_partner.val('')
      break;
    case '7': //partner notaris
      nilai_transaksi.closest('.form-group').show()
      nilai_transaksi.attr('data-parsley-required', true)
      nilai_ht.closest('.form-group').hide()
      nilai_ht.attr('data-parsley-required', false)
      nilai_ht.val('')
      plafond_hutang.closest('.form-group').hide()
      plafond_hutang.attr('data-parsley-required', false)
      plafond_hutang.val('')
      kota.closest('.form-group').hide()
      kota.attr('data-parsley-required', false)
      kota.val('')
      nama_direktur.closest('.form-group').hide()
      nama_direktur.attr('data-parsley-required', false)
      nama_direktur.val('')
      modal_dasar.closest('.form-group').hide()
      modal_dasar.attr('data-parsley-required', false)
      modal_dasar.val('')
      badan_ajuan.closest('.form-group').hide()
      badan_ajuan.attr('data-parsley-required', false)
      badan_ajuan.val('')
      pendiri.closest('.form-group').hide()
      pendiri.attr('data-parsley-required', false)
      pendiri.val('')
      badan_disetujui.closest('.form-group').hide()
      badan_disetujui.attr('data-parsley-required', false)
      badan_disetujui.val('')
      notaris_partner.closest('.form-group').hide()
      notaris_partner.attr('data-parsley-required', false)
      notaris_partner.val('')
      break;
    default:
      break;
  }
}

var handlePihakDraggable = function () {
  "use strict";
  let el;
  el = $('div[id^=pihak]').closest('.ui-sortable');

  $(el).on("sortstop", function (e, ui) {
    var x = $(e.target).find('div[id^=pihak]');
    x.each(function (k, v) {
      var cel = $(this);
      cel.attr('id', `pihak-${k + 1}`)
        .find('.panel-title').html(`Pihak ${k + 1}`);
    })
  });
}

var handlePihakRemovable = function () {
  "use strict";
  let el;
  el = $('div[id^=pihak].panel')
  $(el).on("remove", function (e) {
    Promise.resolve().then(() => {
      let x = $(el).closest('.ui-sortable').find('div[id^=pihak].panel')
      x.each(function (k, v) {
        var cel = $(this);
        cel.attr('id', `pihak-${k + 1}`)
          .find('.panel-title').html(`Pihak ${k + 1}`);
      })
    });
  })
}

var handleBtnAddPihak = function () {
  "use strict";
  let btn, el, lastEl, lastId, newEl;
  btn = $('#btn-add-pihak');
  btn.on('click', function (e) {
    e.preventDefault();
    el = $('div[id^=pihak]');
    lastEl = el.last();
    lastId = parseInt(lastEl.attr('id').replace(/[^0-9]/gi, ''));
    newEl = lastEl.clone();
    newEl.attr('id', `pihak-${lastId + 1}`);
    newEl.find('.panel-title').html(`Pihak ${lastId + 1}`);
    newEl.find(':input').val('');
    newEl.find('[data-click="panel-remove"]').removeAttr('hidden')
    newEl.insertAfter(lastEl);

    handlePihakRemovable()
  })
}

var handleProjectPreview = function () {
  var form = $('form[name="project-form-wizard"]');

  var fieldset = form.find('fieldset').children();
  var cloned = fieldset.clone();
  cloned.find(':input:radio').prop('name', 'jenis_form' + Date.now());
  cloned.find(':input').not('button');
  cloned.find('.panel-heading-btn').remove()
  cloned.find('#btn-add-pihak').remove()
  cloned.find(':input').attr('disabled', true)

  $('#project-preview').html(cloned)
}

var FormWizardValidation = function () {
  "use strict";
  return {
    //main function
    init: function () {
      handleBootstrapWizardsValidation();
      handlePihakDraggable();
      handlePihakRemovable();
      handleBtnAddPihak();
    }
  };
}();

$(document).ready(function () {
  FormWizardValidation.init();
});