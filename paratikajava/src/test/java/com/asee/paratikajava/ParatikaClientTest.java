package com.asee.paratikajava;


import org.json.simple.JSONObject;
import org.junit.Before;
import org.junit.Test;

import junit.framework.TestCase;

/**
 * Unit tests for ParatikaClient
 */
public class ParatikaClientTest extends TestCase {
	private ParatikaUtil util;
	private ParatikaService service;
	private ParatikaClient paratikaClient;
	
	@Before
	public void setUp() {
		util = new ParatikaUtil();
		service = new ParatikaService();
		paratikaClient = new ParatikaClient(util, service);
	}
	
	@Test
	public void testSessionToken() {
		JSONObject paratikaResponse = paratikaClient.sessionToken();
		assertTrue(paratikaResponse.get("responseCode").equals("00"));
		assertNotNull(paratikaResponse.get("sessionToken"));
	}
	
	@Test
	public void testQuerySession() {
		JSONObject paratikaResponse = paratikaClient.querySession();
		assertTrue(paratikaResponse.get("responseCode").equals("00"));
	}
	
	@Test
	public void testSale() {
		JSONObject paratikaResponse = paratikaClient.sale();
		assertTrue(paratikaResponse.get("responseCode").equals("00"));
	}

	@Test
	public void testPreauth() {
		JSONObject paratikaResponse = paratikaClient.preauth();
		assertTrue(paratikaResponse.get("responseCode").equals("00"));
	}
}
