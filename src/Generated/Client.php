<?php

namespace Datenkraft\Backbone\Client\PriceAssessmentApi\Generated;

class Client extends \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Runtime\Client\Client
{
    /**
     * Get the audit log.
     * @param array{
     *    "page"?: int, //The page to read. Default is the first page.
     *    "pageSize"?: int, //The maximum size per page is 100. Default is 100.
     *    "paginationMode"?: string, //The paginationMode to use:
     *                               //- default: The total number of items in the collection will not be calculated.
     *                               //- totalCount: The total number of items in the collection will be calculated.
     *                               //This can mean loss of performance.
     *    "filter[endpoint]"?: string, //A filter for restricting the audit log to a endpoint.
     *    "filter[version]"?: string, //A filter for restricting the audit log to a endpoint version.
     *    "filter[identifier]"?: mixed, //A filter for querying actions for a identifier.
     * } $queryParameters
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetAuditLogCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetAuditLogCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetAuditLogCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetAuditLogCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\AuditLogCollection|\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse
     */
    public function getAuditLogCollection(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint\GetAuditLogCollection($queryParameters));
    }
    /**
     * Delete one or more role to permission assignments in this resource server
     * @param null|\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\AuthPermissionRoleResource[] $requestBody
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\DeleteAuthPermissionRoleCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\DeleteAuthPermissionRoleCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\DeleteAuthPermissionRoleCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\DeleteAuthPermissionRoleCollectionUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\DeleteAuthPermissionRoleCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\BadResponseException
     *
     * @return null|\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse
     */
    public function deleteAuthPermissionRoleCollection(?array $requestBody = null)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint\DeleteAuthPermissionRoleCollection($requestBody));
    }
    /**
     * Get all role to permission assignments from this resource server
     * @param array{
     *    "page"?: int, //The page to read. Default is the first page.
     *    "pageSize"?: int, //The maximum size per page is 100. Default is 100.
     *    "paginationMode"?: string, //The paginationMode to use:
     *                               //- default: The total number of items in the collection will not be calculated.
     *                               //- totalCount: The total number of items in the collection will be calculated.
     *                               //This can mean loss of performance.
     * } $queryParameters
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetAuthPermissionRoleCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetAuthPermissionRoleCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetAuthPermissionRoleCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\AuthPermissionRolePaginatedCollection|\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse
     */
    public function getAuthPermissionRoleCollection(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint\GetAuthPermissionRoleCollection($queryParameters));
    }
    /**
     * Create one or more role to permission assignments in this resource server
     * @param \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\AuthPermissionRoleResource[] $requestBody
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostAuthPermissionRoleCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostAuthPermissionRoleCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostAuthPermissionRoleCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostAuthPermissionRoleCollectionConflictException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostAuthPermissionRoleCollectionUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostAuthPermissionRoleCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\AuthPermissionRoleResource[]|\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse
     */
    public function postAuthPermissionRoleCollection(array $requestBody)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint\PostAuthPermissionRoleCollection($requestBody));
    }
    /**
     * Get all permissions from this resource server
     * @param array{
     *    "page"?: int, //The page to read. Default is the first page.
     *    "pageSize"?: int, //The maximum size per page is 100. Default is 100.
     *    "paginationMode"?: string, //The paginationMode to use:
     *                               //- default: The total number of items in the collection will not be calculated.
     *                               //- totalCount: The total number of items in the collection will be calculated.
     *                               //This can mean loss of performance.
     * } $queryParameters
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetAuthPermissionCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetAuthPermissionCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetAuthPermissionCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\GetAuthPermissionCollectionResponse|\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse
     */
    public function getAuthPermissionCollection(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint\GetAuthPermissionCollection($queryParameters));
    }
    /**
     * Delete one or more role to identity assignments in this resource server
     * @param null|\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\AuthRoleIdentityResource[] $requestBody
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\DeleteAuthRoleIdentityCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\DeleteAuthRoleIdentityCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\DeleteAuthRoleIdentityCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\DeleteAuthRoleIdentityCollectionUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\DeleteAuthRoleIdentityCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\BadResponseException
     *
     * @return null|\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse
     */
    public function deleteAuthRoleIdentityCollection(?array $requestBody = null)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint\DeleteAuthRoleIdentityCollection($requestBody));
    }
    /**
     * Get all role to identity assignments from this resource server
     * @param array{
     *    "page"?: int, //The page to read. Default is the first page.
     *    "pageSize"?: int, //The maximum size per page is 100. Default is 100.
     *    "paginationMode"?: string, //The paginationMode to use:
     *                               //- default: The total number of items in the collection will not be calculated.
     *                               //- totalCount: The total number of items in the collection will be calculated.
     *                               //This can mean loss of performance.
     * } $queryParameters
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetAuthRoleIdentityCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetAuthRoleIdentityCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetAuthRoleIdentityCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\AuthRoleIdentityPaginatedCollection|\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse
     */
    public function getAuthRoleIdentityCollection(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint\GetAuthRoleIdentityCollection($queryParameters));
    }
    /**
     * Create one or more role to identity assignments in this resource server
     * @param \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\AuthRoleIdentityResource[] $requestBody
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostAuthRoleIdentityCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostAuthRoleIdentityCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostAuthRoleIdentityCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostAuthRoleIdentityCollectionConflictException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostAuthRoleIdentityCollectionUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostAuthRoleIdentityCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\AuthRoleIdentityResource[]|\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse
     */
    public function postAuthRoleIdentityCollection(array $requestBody)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint\PostAuthRoleIdentityCollection($requestBody));
    }
    /**
     * Get all available roles from this resource server
     * @param array{
     *    "page"?: int, //The page to read. Default is the first page.
     *    "pageSize"?: int, //The maximum size per page is 100. Default is 100.
     *    "paginationMode"?: string, //The paginationMode to use:
     *                               //- default: The total number of items in the collection will not be calculated.
     *                               //- totalCount: The total number of items in the collection will be calculated.
     *                               //This can mean loss of performance.
     * } $queryParameters
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetAuthRoleCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetAuthRoleCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetAuthRoleCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\AuthRoleCollection|\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse
     */
    public function getAuthRoleCollection(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint\GetAuthRoleCollection($queryParameters));
    }
    /**
     * Delete a role for this resource server
     * @param string $roleCode Identifier for the role
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\DeleteAuthRoleUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\DeleteAuthRoleForbiddenException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\DeleteAuthRoleNotFoundException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\DeleteAuthRoleInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\BadResponseException
     *
     * @return null|\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse
     */
    public function deleteAuthRole(string $roleCode)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint\DeleteAuthRole($roleCode));
    }
    /**
     * Get a role from this resource server by its roleCode
     * @param string $roleCode Identifier for the role
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetAuthRoleUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetAuthRoleForbiddenException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetAuthRoleNotFoundException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetAuthRoleInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\AuthRoleResource|\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse
     */
    public function getAuthRole(string $roleCode)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint\GetAuthRole($roleCode));
    }
    /**
     * Patch a role for this resource server
     * @param string $roleCode Identifier for the role
     * @param \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\NewAuthRoleResource $requestBody
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PatchAuthRoleBadRequestException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PatchAuthRoleUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PatchAuthRoleForbiddenException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PatchAuthRoleNotFoundException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PatchAuthRoleInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\AuthRoleResource|\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse
     */
    public function patchAuthRole(string $roleCode, \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\NewAuthRoleResource $requestBody)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint\PatchAuthRole($roleCode, $requestBody));
    }
    /**
     * Post a role for this resource server
     * @param string $roleCode Identifier for the role
     * @param \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\NewAuthRoleResource $requestBody
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostAuthRoleBadRequestException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostAuthRoleUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostAuthRoleForbiddenException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostAuthRoleConflictException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostAuthRoleInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\AuthRoleResource|\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse
     */
    public function postAuthRole(string $roleCode, \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\NewAuthRoleResource $requestBody)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint\PostAuthRole($roleCode, $requestBody));
    }
    /**
     * Query Customer Pricing Profile collection by customer ids
     * @param array{
     *    "page"?: int, //The page to read. Default is the first page.
     *    "pageSize"?: int, //The maximum size per page is 100. Default is 100.
     *    "paginationMode"?: string, //The paginationMode to use:
     *                               //- default: The total number of items in the collection will not be calculated.
     *                               //- totalCount: The total number of items in the collection will be calculated.
     *                               //This can mean loss of performance.
     *    "filter[customerIds]"?: string, //Comma seperated list of customer ids (optional)
     * } $queryParameters
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetCustomerPricingProfileCollectionEndpointBadRequestException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetCustomerPricingProfileCollectionEndpointUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetCustomerPricingProfileCollectionEndpointForbiddenException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetCustomerPricingProfileCollectionEndpointInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\CustomerPricingProfileCollection|\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse
     */
    public function getCustomerPricingProfileCollectionEndpoint(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint\GetCustomerPricingProfileCollectionEndpoint($queryParameters));
    }
    /**
     * Add a new Customer Pricing Profile. You may not use this endpoint to add stepped
     * prices to an existing pricing profile.
     * @param \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\NewCustomerPricingProfile $requestBody
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostCustomerPricingProfileBadRequestException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostCustomerPricingProfileUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostCustomerPricingProfileForbiddenException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostCustomerPricingProfileConflictException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostCustomerPricingProfileUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostCustomerPricingProfileInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\CustomerPricingProfile|\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse
     */
    public function postCustomerPricingProfile(\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\NewCustomerPricingProfile $requestBody)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint\PostCustomerPricingProfile($requestBody));
    }
    /**
     * Delete Customer Pricing Profile
     * @param string $customerPricingProfileId Customer Pricing Profile Id
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\DeleteCustomerPricingProfileBadRequestException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\DeleteCustomerPricingProfileUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\DeleteCustomerPricingProfileForbiddenException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\DeleteCustomerPricingProfileNotFoundException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\DeleteCustomerPricingProfileInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\BadResponseException
     *
     * @return null|\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse
     */
    public function deleteCustomerPricingProfile(string $customerPricingProfileId)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint\DeleteCustomerPricingProfile($customerPricingProfileId));
    }
    /**
     * Query Customer Pricing Profile by by its id
     * @param string $customerPricingProfileId Customer Pricing Profile Id
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetCustomerPricingProfileBadRequestException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetCustomerPricingProfileUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetCustomerPricingProfileForbiddenException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetCustomerPricingProfileNotFoundException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetCustomerPricingProfileInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\CustomerPricingProfile|\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse
     */
    public function getCustomerPricingProfile(string $customerPricingProfileId)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint\GetCustomerPricingProfile($customerPricingProfileId));
    }
    /**
     * Update one or more fields of a Customer Pricing Profile. Please note,
     * that existing stepped prices are replaced by the value you send via the request body, not supplemented.
     * @param string $customerPricingProfileId Customer Pricing Profile Id
     * @param \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\PatchCustomerPricingProfile $requestBody
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PatchCustomerPricingProfileBadRequestException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PatchCustomerPricingProfileUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PatchCustomerPricingProfileForbiddenException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PatchCustomerPricingProfileNotFoundException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PatchCustomerPricingProfileInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\CustomerPricingProfile|\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse
     */
    public function patchCustomerPricingProfile(string $customerPricingProfileId, \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\PatchCustomerPricingProfile $requestBody)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint\PatchCustomerPricingProfile($customerPricingProfileId, $requestBody));
    }
    /**
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\BadResponseException
     *
     * @return null
     */
    public function getOpenApi()
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint\GetOpenApi());
    }
    /**
     * Get the changelog in the specified format
     * @param string $format Changelog file format
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetChangelogInFormatNotFoundException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetChangelogInFormatBadRequestException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\BadResponseException
     *
     * @return null
     */
    public function getChangelogInFormat(string $format)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint\GetChangelogInFormat($format));
    }
    /**
     * Get the openapi documentation in the specified format
     * @param string $format Openapi file format
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetOpenApiInFormatBadRequestException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\BadResponseException
     *
     * @return null
     */
    public function getOpenApiInFormat(string $format)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint\GetOpenApiInFormat($format));
    }
    /**
     * Query Organization Pricing Profile collection by organization ids
     * @param array{
     *    "filter[organizationIds]"?: string, //Comma seperated list of organization ids (optional)
     * } $queryParameters
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetOrganizationPricingProfileCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetOrganizationPricingProfileCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetOrganizationPricingProfileCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetOrganizationPricingProfileCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\OrganizationPricingProfileCollection|\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse
     */
    public function getOrganizationPricingProfileCollection(array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint\GetOrganizationPricingProfileCollection($queryParameters));
    }
    /**
     * Add a new Organization Pricing Profile.
     * You may not use this endpoint to add stepped prices to an existing pricing profile.
     * @param \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\NewOrganizationPricingProfile $requestBody
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostOrganizationPricingProfileBadRequestException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostOrganizationPricingProfileUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostOrganizationPricingProfileForbiddenException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostOrganizationPricingProfileConflictException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostOrganizationPricingProfileUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostOrganizationPricingProfileInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\OrganizationPricingProfile|\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse
     */
    public function postOrganizationPricingProfile(\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\NewOrganizationPricingProfile $requestBody)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint\PostOrganizationPricingProfile($requestBody));
    }
    /**
     * Delete Organization Pricing Profile
     * @param string $organizationPricingProfileId Organization Pricing Profile Id
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\DeleteOrganizationPricingProfileBadRequestException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\DeleteOrganizationPricingProfileUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\DeleteOrganizationPricingProfileForbiddenException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\DeleteOrganizationPricingProfileNotFoundException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\DeleteOrganizationPricingProfileInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\BadResponseException
     *
     * @return null|\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse
     */
    public function deleteOrganizationPricingProfile(string $organizationPricingProfileId)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint\DeleteOrganizationPricingProfile($organizationPricingProfileId));
    }
    /**
     * Query Organization Pricing Profile by by its id
     * @param string $organizationPricingProfileId Organization Pricing Profile Id
     * @param array{
     *    "page"?: int, //The page to read. Default is the first page.
     *    "pageSize"?: int, //The maximum size per page is 100. Default is 100.
     *    "paginationMode"?: string, //The paginationMode to use:
     *                               //- default: The total number of items in the collection will not be calculated.
     *                               //- totalCount: The total number of items in the collection will be calculated.
     *                               //This can mean loss of performance.
     * } $queryParameters
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetOrganizationPricingProfileBadRequestException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetOrganizationPricingProfileUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetOrganizationPricingProfileForbiddenException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetOrganizationPricingProfileNotFoundException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetOrganizationPricingProfileInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\OrganizationPricingProfile|\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse
     */
    public function getOrganizationPricingProfile(string $organizationPricingProfileId, array $queryParameters = [])
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint\GetOrganizationPricingProfile($organizationPricingProfileId, $queryParameters));
    }
    /**
     * Update one or more fields of a Organization Pricing Profile. Please note,
     * that existing stepped prices are replaced by the value you send via the request body, not supplemented.
     * @param string $organizationPricingProfileId Organization Pricing Profile Id
     * @param \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\PatchOrganizationPricingProfile $requestBody
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PatchOrganizationPricingProfileBadRequestException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PatchOrganizationPricingProfileUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PatchOrganizationPricingProfileForbiddenException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PatchOrganizationPricingProfileNotFoundException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PatchOrganizationPricingProfileInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\OrganizationPricingProfile|\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse
     */
    public function patchOrganizationPricingProfile(string $organizationPricingProfileId, \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\PatchOrganizationPricingProfile $requestBody)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint\PatchOrganizationPricingProfile($organizationPricingProfileId, $requestBody));
    }
    /**
     * Get Price
     * @param array{
     *    "page"?: int, //The page to read. Default is the first page.
     *    "pageSize"?: int, //The maximum size per page is 100. Default is 100.
     *    "paginationMode"?: string, //The paginationMode to use:
     *                               //- default: The total number of items in the collection will not be calculated.
     *                               //- totalCount: The total number of items in the collection will be calculated.
     *                               //This can mean loss of performance.
     *    "filter[customerId]": string, //Customer Id filter
     *    "filter[skuCode]": string, //SKU Code filter
     *    "filter[validFrom]"?: string, //Valid From Date filter
     * } $queryParameters
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetPriceCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetPriceCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetPriceCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetPriceCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\PriceCollection|\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse
     */
    public function getPriceCollection(array $queryParameters)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint\GetPriceCollection($queryParameters));
    }
    /**
     * Get Price Table for an Organization.
     * The prices are sorted by: skuGroup:name, sku:name, validFrom, steppedPrices:validFromQuantity.
     * @param array{
     *    "filter[organizationId]": string, //Organization Id filter
     *    "filter[validFrom]"?: string, //Valid From Date filter in UTC
     * } $queryParameters
     * @param array $accept Accept content header application/json|text/csv
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetReportPriceBadRequestException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetReportPriceUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetReportPriceForbiddenException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetReportPriceNotAcceptableException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetReportPriceInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\BadResponseException
     *
     * @return \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse
     */
    public function getReportPrice(array $queryParameters, array $accept = [])
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint\GetReportPrice($queryParameters, $accept));
    }
    /**
     * @param list<callable(\Symfony\Contracts\HttpClient\HttpClientInterface): \Symfony\Contracts\HttpClient\HttpClientInterface> $additionalPlugins HttpClientInterface decorator factories, applied left-to-right after the server URL decorator
     * @param list<\Symfony\Component\Serializer\Normalizer\NormalizerInterface|\Symfony\Component\Serializer\Normalizer\DenormalizerInterface> $additionalNormalizers
     */
    public static function create(?\Symfony\Contracts\HttpClient\HttpClientInterface $httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [], bool $applyServerPlugins = true)
    {
        $plugins = [];
        if (null === $httpClient) {
            $httpClient = \Symfony\Component\HttpClient\HttpClient::create();
        }
        if ($applyServerPlugins) {
            $plugins[] = new \Jane\Component\OpenApiRuntime\Client\Plugin\ServerUrlHttpClient('https://price-assessment-api.steve.niceshops.com/v2');
        }
        if (count($additionalPlugins) > 0) {
            $plugins = array_merge($plugins, $additionalPlugins);
        }
        foreach ($plugins as $plugin) {
            $httpClient = $plugin($httpClient);
        }
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true])), new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Runtime\Client\FormEncoder()]);
        return new static($httpClient, $serializer);
    }
}