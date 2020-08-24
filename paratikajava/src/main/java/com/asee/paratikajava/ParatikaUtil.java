package com.asee.paratikajava;

import java.io.UnsupportedEncodingException;
import java.net.URLEncoder;
import java.nio.charset.StandardCharsets;
import java.util.Map;
import java.util.Map.Entry;
import java.util.UUID;

import org.apache.commons.text.RandomStringGenerator;
import org.json.simple.JSONArray;
import org.json.simple.JSONObject;

public class ParatikaUtil {

	/**
	 * This section takes the input fields and converts them to the proper format
	 * for an HTTP post request. For example: "A=x&B=y"
	 * 
	 * @param requestParameters
	 *            Request parameters
	 * @return URL encoded request data
	 * @throws UnsupportedEncodingException
	 */
	public String convertToRequestData(Map<String, String> requestParameters) throws UnsupportedEncodingException {
		StringBuilder requestData = new StringBuilder();
		for (Entry<String, String> entry : requestParameters.entrySet()) {
			String key = URLEncoder.encode(entry.getKey(), "UTF-8");
			String value = URLEncoder.encode(entry.getValue(), "UTF-8");
			requestData.append(key + "=" + value + "&");
		}
		return requestData.toString();
	}

	private String encodeParameter(String parameterValue) {
		String encodedValue = "";
		try {
			if (parameterValue != null) {
				encodedValue = URLEncoder.encode(parameterValue, StandardCharsets.UTF_8.toString());
			}
		} catch (UnsupportedEncodingException e) {
			System.out.println(parameterValue + " UnsupportedEncodingException " + e.getStackTrace());
		}
		return encodedValue;
	}

	@SuppressWarnings("unchecked")
	public void prepareSessionTokenParameters(Map<String, String> requestParameters)
			throws UnsupportedEncodingException {
		requestParameters.put("ACTION", "SESSIONTOKEN");
		requestParameters.put("MERCHANTPAYMENTID", UUID.randomUUID().toString());
		requestParameters.put("AMOUNT", "1000");
		requestParameters.put("CURRENCY", "TRY");
		requestParameters.put("SESSIONTYPE", "PAYMENTSESSION");
		requestParameters.put("RETURNURL", "https://test.paratika.com.tr/paratika/index.jsp");
		JSONArray oItems = new JSONArray();
		JSONObject item = new JSONObject();
		item.put("code", "T00D3AITCC");
		item.put("name", "Galaxy S8+");
		item.put("quantity", 1);
		item.put("description", "The Samsung Galaxy S8 is Android smartphone produced by Samsung Electronics as part of the Samsung Galaxy S series.");
		item.put("amount", 1000);
		oItems.add(item);
		requestParameters.put("ORDERITEMS", encodeParameter(oItems.toJSONString()));
		JSONObject extra = new JSONObject();
		extra.put("IntegrationModel", "API");
		extra.put("AlwaysSaveCard", "true");
		requestParameters.put("EXTRA", encodeParameter(extra.toJSONString()));
		addMerchantAuthParams(requestParameters);
		addCardAndCustomerParams(requestParameters);
		addBillToAndShipToParams(requestParameters);
	}

	public void preparePrimaryTrxParameters(Map<String, String> requestParameters) {
		RandomStringGenerator rsg = new RandomStringGenerator.Builder().withinRange('0', '9').build();
		requestParameters.put("AMOUNT", "1" + rsg.generate(1) + "." + rsg.generate(2));
		requestParameters.put("CURRENCY", "TRY");
		requestParameters.put("MERCHANTPAYMENTID", UUID.randomUUID().toString());
		addMerchantAuthParams(requestParameters);
		addCardAndCustomerParams(requestParameters);
		addBillToAndShipToParams(requestParameters);
	}

	private void addMerchantAuthParams(Map<String, String> requestParameters) {
		requestParameters.put("MERCHANT", "10000000");
		requestParameters.put("MERCHANTUSER", "apiuser@testmerchant.com");
		requestParameters.put("MERCHANTPASSWORD", "Pluto321`");
	}

	private void addCardAndCustomerParams(Map<String, String> requestParameters) {
		requestParameters.put("CUSTOMER", UUID.randomUUID().toString());
		requestParameters.put("CUSTOMERNAME", "Aydonat Aydınlar");
		requestParameters.put("CUSTOMEREMAIL", "mghUzjPn@email.com");
		requestParameters.put("CUSTOMERIP", "127.0.0.1");
		requestParameters.put("CUSTOMERPHONE", "+903120000011");
		requestParameters.put("CUSTOMERBIRTHDAY", "19-04-1969");
		requestParameters.put("CUSTOMERUSERAGENT", "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:56.0) Gecko/20100101 Firefox/56.0");
		requestParameters.put("NAMEONCARD", "Aydonat Aydınlar");
		requestParameters.put("CARDPAN", "4532513386094198");
		requestParameters.put("CARDEXPIRY", "12.2030");
		requestParameters.put("CARDCVV", "000");
	}

	private void addBillToAndShipToParams(Map<String, String> requestParameters) {
		requestParameters.put("BILLTOADDRESSLINE", "Çöişüğı Plaza, Ostim No:83/9, Yenimahalle");
		requestParameters.put("BILLTOCITY", "Ankara");
		requestParameters.put("BILLTOCOUNTRY", "Türkiye");
		requestParameters.put("BILLTOPOSTALCODE", "06000");
		requestParameters.put("BILLTOPHONE", "+903120000001");
		requestParameters.put("SHIPTOADDRESSLINE", "Plaza ÇÖİŞÜĞI, Ostim No:83/9, Yenimahalle");
		requestParameters.put("SHIPTOCITY", "Ankara");
		requestParameters.put("SHIPTOCOUNTRY", "Türkiye");
		requestParameters.put("SHIPTOPOSTALCODE", "06000");
		requestParameters.put("SHIPTOPHONE", "+903120000001");
	}
}
