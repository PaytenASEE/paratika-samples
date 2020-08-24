package com.asee.paratikajava;

import java.net.URL;
import java.net.URLConnection;
import java.util.HashMap;
import java.util.Map;

import org.apache.commons.lang3.StringUtils;
import org.json.simple.JSONObject;
import org.json.simple.parser.JSONParser;


public class ParatikaClient {

	private static final String REQUEST_URL = " > Request URL: ";
	private static final String RESPONSE_DATA = " > Response Data: \n";
	private static final String REQUEST_DATA = " > Request Data: ";
	private static final String ACTION = "ACTION";

	private ParatikaUtil paratikaUtil;
	private ParatikaService paratikaService;

	public ParatikaClient() {
	}

	public ParatikaClient(ParatikaUtil paratikaUtil, ParatikaService paratikaService) {
		super();
		this.paratikaUtil = paratikaUtil;
		this.paratikaService = paratikaService;
	}

	/**
	 * Production environment API service URL 
	 */
	 //private static final String URL =  "https://vpos.paratika.com.tr/paratika/api/v2";
	 
	
	/**
	 * Test environment API service URL
	 */
	private static final String URL = "https://test.paratika.com.tr/paratika/api/v2";

	public static void main(String args[]) {
		ParatikaClient paratikaClient = new ParatikaClient();
		paratikaClient.sessionToken();
		paratikaClient.sale();
		paratikaClient.preauth();
		paratikaClient.querySession();
	}

	/**
	 * Sample API sessionToken operation to the Paratika API
	 * 
	 */
	public JSONObject sessionToken() {
		JSONObject paratikaResponse = null;
		try {
			System.out.println("A sample SESSIONTOKEN operation is started.");
			long started = System.currentTimeMillis();
			URL url = new URL(URL);
			System.out.println(REQUEST_URL + URL);
			Map<String, String> requestParameters = new HashMap<String, String>();
			paratikaUtil.prepareSessionTokenParameters(requestParameters);
			String requestData = paratikaUtil.convertToRequestData(requestParameters);
			System.out.println(REQUEST_DATA + requestData);
			URLConnection connection = paratikaService.getConnection(url);
			String response = paratikaService.getResponse(connection, requestData);
			System.out.println(RESPONSE_DATA + response);
			System.out.println(" > ParatikaClient.sessionToken() operation is finished in " + (System.currentTimeMillis() - started) + " ms.");
			JSONParser parser = new JSONParser();
			paratikaResponse = (JSONObject) parser.parse(response);
			checkResponse(paratikaResponse, response, "SESSIONTOKEN");
		} catch (Exception e) {
			e.printStackTrace();
		}
		return paratikaResponse;
	}
	
	/**
	 * Sample API query session operation to the Paratika API in order to see orderItems and extra parameters
	 * 
	 */
	@SuppressWarnings("unchecked")
	public JSONObject querySession() {
		JSONObject paratikaResponse = null;
		try {
			String action = "QUERYSESSION";
			JSONObject doSessionToken = this.sessionToken();
			String sessionToken = (String) doSessionToken.getOrDefault("sessionToken", "");
			System.out.println("A sample QUERYSESSION operation is started.");
			long started = System.currentTimeMillis();
			URL url = new URL(URL);
			System.out.println(REQUEST_URL + URL);
			Map<String, String> requestParameters = new HashMap<String, String>();
			requestParameters.put(ACTION, action);
			requestParameters.put("SESSIONTOKEN", sessionToken);
			String requestData = paratikaUtil.convertToRequestData(requestParameters);
			System.out.println(REQUEST_DATA + requestData);
			URLConnection connection = paratikaService.getConnection(url);
			String response = paratikaService.getResponse(connection, requestData);
			System.out.println(RESPONSE_DATA + response);
			System.out.println(" > ParatikaClient.querySession() operation is finished in " + (System.currentTimeMillis() - started) + "ms.");
			JSONParser parser = new JSONParser();
			paratikaResponse = (JSONObject) parser.parse(response);
			checkResponse(paratikaResponse, response, action);
		} catch (Exception e) {
			e.printStackTrace();
		}
		return paratikaResponse;
	}
	

	/**
	 * Sample API sale operation to the Paratika API
	 * 
	 */
	public JSONObject sale() {
		JSONObject paratikaResponse = null;
		try {
			String action = "SALE";
			System.out.println("A sample SALE operation is started.");
			long started = System.currentTimeMillis();
			URL url = new URL(URL);
			System.out.println(REQUEST_URL + URL);
			Map<String, String> requestParameters = new HashMap<String, String>();
			requestParameters.put(ACTION, action);
			paratikaUtil.preparePrimaryTrxParameters(requestParameters);
			String requestData = paratikaUtil.convertToRequestData(requestParameters);
			System.out.println(REQUEST_DATA + requestData);
			URLConnection connection = paratikaService.getConnection(url);
			String response = paratikaService.getResponse(connection, requestData);
			System.out.println(RESPONSE_DATA + response);
			System.out.println(" > ParatikaClient.sale() operation is finished in " + (System.currentTimeMillis() - started) + "ms.");
			JSONParser parser = new JSONParser();
			paratikaResponse = (JSONObject) parser.parse(response);
			checkResponse(paratikaResponse, response, action);
		} catch (Exception e) {
			e.printStackTrace();
		}
		return paratikaResponse;
	}

	/**
	 * Sample API preauth operation to the Paratika API
	 * 
	 */
	public JSONObject preauth() {
		JSONObject paratikaResponse = null;
		try {
			String action = "PREAUTH";
			System.out.println("A sample PREAUTH operation is started.");
			long started = System.currentTimeMillis();
			URL url = new URL(URL);
			System.out.println(REQUEST_URL + URL);
			Map<String, String> requestParameters = new HashMap<String, String>();
			requestParameters.put(ACTION, action);
			paratikaUtil.preparePrimaryTrxParameters(requestParameters);
			String requestData = paratikaUtil.convertToRequestData(requestParameters);
			System.out.println(REQUEST_DATA + requestData);
			URLConnection connection = paratikaService.getConnection(url);
			String response = paratikaService.getResponse(connection, requestData);
			System.out.println(RESPONSE_DATA + response);
			System.out.println(" > ParatikaClient.preauth() operation is finished in " + (System.currentTimeMillis() - started) + "ms.");
			JSONParser parser = new JSONParser();
			paratikaResponse = (JSONObject) parser.parse(response);
			checkResponse(paratikaResponse, response, action);
		} catch (Exception e) {
			e.printStackTrace();
		}
		return paratikaResponse;
	}

	private void checkResponse(JSONObject json, String response, String action) {
		if (response != null
				&& StringUtils.equalsIgnoreCase(json.get("responseCode").toString(), "00")
				&& StringUtils.equalsIgnoreCase(json.get("responseMsg").toString(), "Approved")) {
			System.out.println(" > " + action + " operation is SUCCESSFUL.");
		} else {
			System.out.println(" > " + action + " operation is FAILED, please check the error codes.");
			System.out.println("   ErrorCode     : " + json.get("errorCode"));
			System.out.println("   ErrorMessage  : " + json.get("errorMsg"));
		}
	}
}
