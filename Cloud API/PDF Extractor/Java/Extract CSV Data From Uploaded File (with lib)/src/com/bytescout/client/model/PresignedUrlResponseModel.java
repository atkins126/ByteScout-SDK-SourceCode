/*
 * bytescout.io
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2017-04-26T03:53:10Z
 * 
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 */


package com.bytescout.client.model;

import java.util.Objects;
import com.google.gson.annotations.SerializedName;
import io.swagger.annotations.ApiModel;
import io.swagger.annotations.ApiModelProperty;

/**
 * PresignedUrlResponseModel
 */
@javax.annotation.Generated(value = "io.swagger.codegen.languages.JavaClientCodegen", date = "2017-04-26T06:52:34.533Z")
public class PresignedUrlResponseModel {
  @SerializedName("error")
  private Boolean error = null;

  @SerializedName("status")
  private Integer status = null;

  @SerializedName("name")
  private String name = null;

  @SerializedName("url")
  private String url = null;

  @SerializedName("presignedUrl")
  private String presignedUrl = null;

  public PresignedUrlResponseModel error(Boolean error) {
    this.error = error;
    return this;
  }

   /**
   * Get error
   * @return error
  **/
  @ApiModelProperty(example = "null", value = "")
  public Boolean getError() {
    return error;
  }

  public void setError(Boolean error) {
    this.error = error;
  }

  public PresignedUrlResponseModel status(Integer status) {
    this.status = status;
    return this;
  }

   /**
   * Get status
   * @return status
  **/
  @ApiModelProperty(example = "null", value = "")
  public Integer getStatus() {
    return status;
  }

  public void setStatus(Integer status) {
    this.status = status;
  }

  public PresignedUrlResponseModel name(String name) {
    this.name = name;
    return this;
  }

   /**
   * Get name
   * @return name
  **/
  @ApiModelProperty(example = "null", value = "")
  public String getName() {
    return name;
  }

  public void setName(String name) {
    this.name = name;
  }

  public PresignedUrlResponseModel url(String url) {
    this.url = url;
    return this;
  }

   /**
   * Get url
   * @return url
  **/
  @ApiModelProperty(example = "null", value = "")
  public String getUrl() {
    return url;
  }

  public void setUrl(String url) {
    this.url = url;
  }

  public PresignedUrlResponseModel presignedUrl(String presignedUrl) {
    this.presignedUrl = presignedUrl;
    return this;
  }

   /**
   * Get presignedUrl
   * @return presignedUrl
  **/
  @ApiModelProperty(example = "null", value = "")
  public String getPresignedUrl() {
    return presignedUrl;
  }

  public void setPresignedUrl(String presignedUrl) {
    this.presignedUrl = presignedUrl;
  }


  @Override
  public boolean equals(java.lang.Object o) {
    if (this == o) {
      return true;
    }
    if (o == null || getClass() != o.getClass()) {
      return false;
    }
    PresignedUrlResponseModel presignedUrlResponseModel = (PresignedUrlResponseModel) o;
    return Objects.equals(this.error, presignedUrlResponseModel.error) &&
        Objects.equals(this.status, presignedUrlResponseModel.status) &&
        Objects.equals(this.name, presignedUrlResponseModel.name) &&
        Objects.equals(this.url, presignedUrlResponseModel.url) &&
        Objects.equals(this.presignedUrl, presignedUrlResponseModel.presignedUrl);
  }

  @Override
  public int hashCode() {
    return Objects.hash(error, status, name, url, presignedUrl);
  }


  @Override
  public String toString() {
    StringBuilder sb = new StringBuilder();
    sb.append("class PresignedUrlResponseModel {\n");
    
    sb.append("    error: ").append(toIndentedString(error)).append("\n");
    sb.append("    status: ").append(toIndentedString(status)).append("\n");
    sb.append("    name: ").append(toIndentedString(name)).append("\n");
    sb.append("    url: ").append(toIndentedString(url)).append("\n");
    sb.append("    presignedUrl: ").append(toIndentedString(presignedUrl)).append("\n");
    sb.append("}");
    return sb.toString();
  }

  /**
   * Convert the given object to string with each line indented by 4 spaces
   * (except the first line).
   */
  private String toIndentedString(java.lang.Object o) {
    if (o == null) {
      return "null";
    }
    return o.toString().replace("\n", "\n    ");
  }
  
}

