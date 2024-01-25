$(document).ready(function() {


   let billingInput = $('.input-bill-to-different');
   let billingStatus;

   if ( billingInput.is(':checked') ) {
      billingStatus = 'enabled';
   } else {
      billingStatus = 'disabled';
      mapShippingAndBilling();
   }

   $('.input-bill-to-different').change(function() {

      let billingForm = $('.woocommerce-billing-fields__field-wrapper');

      if ( $(this).is(":checked") ) {
         billingStatus = 'enabled';
         billingForm.slideDown();

         let shippingEmail = $('#shipping_email').val();
         let shippingPhone = $('#shipping_phone').val();

         let billingFirstName = $('#billing_first_name');
         let billingLastName = $('#billing_last_name');
         let billingCountry = $('#billing_country');
         let billingPostcode = $('#billing_postcode');
         let billingAddress1 = $('#billing_address_1');
         let billingAddress2 = $('#billing_address_2');
         let billingCity = $('#billing_city');
         let billingEmail = $('#billing_email');
         let billingPhone = $('#billing_phone');

         billingFirstName.val('');
         billingLastName.val('');
         billingCountry.find('option').removeAttr('selected');
         billingPostcode.val('');
         billingAddress1.val('');
         billingAddress2.val('');
         billingCity.val('');
         billingEmail.val('').val(shippingEmail);
         billingPhone.val('').val(shippingPhone);

      } else {
         billingStatus = 'disabled';
         billingForm.slideUp();
         mapShippingAndBilling();
      }

   })

   function mapShippingAndBilling() {

      let shippingFirstName = $('#shipping_first_name').val();
      let shippingLastName = $('#shipping_last_name').val();
      let shippingCountry = $('#shipping_country').val();
      let shippingPostcode = $('#shipping_postcode').val();
      let shippingAddress1 = $('#shipping_address_1').val();
      let shippingAddress2 = $('#shipping_address_2').val();
      let shippingCity = $('#shipping_city').val();
      let shippingEmail = $('#shipping_email').val();
      let shippingPhone = $('#shipping_phone').val();

      let billingFirstName = $('#billing_first_name');
      let billingLastName = $('#billing_last_name');
      let billingCountry = $('#billing_country');
      let billingPostcode = $('#billing_postcode');
      let billingAddress1 = $('#billing_address_1');
      let billingAddress2 = $('#billing_address_2');
      let billingCity = $('#billing_city');
      let billingEmail = $('#billing_email');
      let billingPhone = $('#billing_phone');

      billingFirstName.val('').val(shippingFirstName);
      billingLastName.val('').val(shippingLastName);
      billingCountry.find('option').removeAttr('selected');
      billingCountry.val(shippingCountry).change();
      billingPostcode.val('').val(shippingPostcode);
      billingAddress1.val('').val(shippingAddress1);
      billingAddress2.val('').val(shippingAddress2);
      billingCity.val('').val(shippingCity);
      billingEmail.val('').val(shippingEmail);
      billingPhone.val('').val(shippingPhone);

   }

   $('#shipping_first_name').keyup(function() {
      if (billingStatus == 'disabled') {
         let value = $(this).val();
         $('#billing_first_name').val('').val(value);
      }
   });

   $('#shipping_last_name').keyup(function() {
      if (billingStatus == 'disabled') {
         let value = $(this).val();
         $('#billing_last_name').val('').val(value);
      }
   });

   $('#shipping_country').change(function() {
      if (billingStatus == 'disabled') {
         let value = $(this).val();
         $('#billing_country').val(value).change();
      }
   });

   $('#shipping_postcode').keyup(function() {
      if (billingStatus == 'disabled') {
         let value = $(this).val();
         $('#billing_postcode').val('').val(value);
      }
   });

   $('#shipping_address_1').keyup(function() {
      if (billingStatus == 'disabled') {
         let value = $(this).val();
         $('#billing_address_1').val('').val(value);
      }
   });

   $('#shipping_address_2').keyup(function() {
      if (billingStatus == 'disabled') {
         let value = $(this).val();
         $('#billing_address_2').val('').val(value);
      }
   });

   $('#shipping_city').keyup(function() {
      if (billingStatus == 'disabled') {
         let value = $(this).val();
         $('#billing_city').val('').val(value);
      }
   });

   $('#shipping_email').keyup(function() {
      let value = $(this).val();
      $('#billing_email').val('').val(value);
   });

   $('#shipping_phone').keyup(function() {
      let value = $(this).val();
      $('#billing_phone').val('').val(value);
   });




   $(document).on('change','.woocommerce-shipping-fields #shipping_gazchaps-woocommerce-getaddress-io-address-selector-select', function() {
      if (billingStatus == 'disabled') {
         let shippingAddress1 = $('#shipping_address_1').val();
         $('#billing_address_1').val('').val(shippingAddress1);

         let shippingAddress2 = $('#shipping_address_2').val();
         $('#billing_address_2').val('').val(shippingAddress2);

         let shippingCity = $('#shipping_city').val();
         $('#billing_city').val('').val(shippingCity);
      }
   })
});
