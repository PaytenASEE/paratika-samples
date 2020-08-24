package com.asee.paratikajava;

import java.io.BufferedReader;
import java.io.DataOutputStream;
import java.io.IOException;
import java.io.InputStreamReader;
import java.net.URL;
import java.net.URLConnection;

public class ParatikaService {
	
	/**
	 * Creates a configured connection object
	 * 
	 * @param url
	 *            API Service URL
	 * @return Configured connection
	 * @throws IOException
	 */
	public URLConnection getConnection(URL url) throws IOException {
		URLConnection connection = url.openConnection();
		connection.setDoOutput(true);
		connection.setUseCaches(false);
		connection.setRequestProperty("Content-Type", "application/x-www-form-urlencoded");
		return connection;
	}

	/**
	 * Writes the request to the socket and reads the response
	 * 
	 * @param connection
	 * @param requestData
	 * @return API Response
	 * @throws IOException
	 */
	public String getResponse(URLConnection connection, String requestData) throws IOException {
		DataOutputStream outputStream = new DataOutputStream(connection.getOutputStream());
		outputStream.write(requestData.getBytes());
		outputStream.flush();
		outputStream.close();
		BufferedReader rawResponse = new BufferedReader(new InputStreamReader(connection.getInputStream()));
		String output = null;
		StringBuilder response = new StringBuilder();
		while ((output = rawResponse.readLine()) != null) {
			response.append(output + "\n");
		}
		rawResponse.close();
		return response.toString();
	}
}
