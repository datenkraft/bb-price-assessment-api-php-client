<?php

namespace Datenkraft\Backbone\Client\PriceAssessmentApi\Generated;

class Client extends \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Runtime\Client\Client
{
    /**
    * Get the audit log.
    *
    * @param array $queryParameters {
    *     @var int $page The page to read. Default is the first page.
    *     @var int $pageSize The maximum size per page is 100. Default is 100.
    *     @var string $paginationMode The paginationMode to use:
    - default: The total number of items in the collection will not be calculated.
    - totalCount: The total number of items in the collection will be calculated. This can mean loss of performance.
    *     @var string $filter[endpoint] A filter for restricting the audit log to a endpoint.
    *     @var string $filter[version] A filter for restricting the audit log to a endpoint version.
    *     @var mixed $filter[identifier] A filter for querying actions for a identifier.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetAuditLogCollectionBadRequestException
    * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetAuditLogCollectionUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetAuditLogCollectionForbiddenException
    * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetAuditLogCollectionInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\AuditLogCollection|\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function getAuditLogCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint\GetAuditLogCollection($queryParameters), $fetch);
    }
    /**
     * Delete one or more role to permission assignments in this resource server
     *
     * @param null|\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\AuthPermissionRoleResource[] $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\DeleteAuthPermissionRoleCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\DeleteAuthPermissionRoleCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\DeleteAuthPermissionRoleCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\DeleteAuthPermissionRoleCollectionNotFoundException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\DeleteAuthPermissionRoleCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteAuthPermissionRoleCollection(?array $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint\DeleteAuthPermissionRoleCollection($requestBody), $fetch);
    }
    /**
    * Get all role to permission assignments from this resource server
    *
    * @param array $queryParameters {
    *     @var int $page The page to read. Default is the first page.
    *     @var int $pageSize The maximum size per page is 100.
    *     @var string $paginationMode The paginationMode to use:
    - default: The total number of items in the collection will not be calculated.
    - totalCount: The total number of items in the collection will be calculated. This can mean loss of performance.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetAuthPermissionRoleCollectionUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetAuthPermissionRoleCollectionForbiddenException
    * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetAuthPermissionRoleCollectionInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\AuthPermissionRolePaginatedCollection|\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function getAuthPermissionRoleCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint\GetAuthPermissionRoleCollection($queryParameters), $fetch);
    }
    /**
     * Create one or more role to permission assignments in this resource server
     *
     * @param \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\AuthPermissionRoleResource[] $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostAuthPermissionRoleCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostAuthPermissionRoleCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostAuthPermissionRoleCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostAuthPermissionRoleCollectionConflictException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostAuthPermissionRoleCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\AuthPermissionRoleResource[]|\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postAuthPermissionRoleCollection(array $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint\PostAuthPermissionRoleCollection($requestBody), $fetch);
    }
    /**
    * Get all permissions from this resource server
    *
    * @param array $queryParameters {
    *     @var int $page The page to read. Default is the first page.
    *     @var int $pageSize The maximum size per page is 100. Default is 100.
    *     @var string $paginationMode The paginationMode to use:
    - default: The total number of items in the collection will not be calculated.
    - totalCount: The total number of items in the collection will be calculated. This can mean loss of performance.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetAuthPermissionCollectionUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetAuthPermissionCollectionForbiddenException
    * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetAuthPermissionCollectionInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\GetAuthPermissionCollectionResponse|\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function getAuthPermissionCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint\GetAuthPermissionCollection($queryParameters), $fetch);
    }
    /**
     * Delete one or more role to identity assignments in this resource server
     *
     * @param null|\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\AuthRoleIdentityResource[] $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\DeleteAuthRoleIdentityCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\DeleteAuthRoleIdentityCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\DeleteAuthRoleIdentityCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\DeleteAuthRoleIdentityCollectionNotFoundException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\DeleteAuthRoleIdentityCollectionUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\DeleteAuthRoleIdentityCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteAuthRoleIdentityCollection(?array $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint\DeleteAuthRoleIdentityCollection($requestBody), $fetch);
    }
    /**
    * Get all role to identity assignments from this resource server
    *
    * @param array $queryParameters {
    *     @var int $page The page to read. Default is the first page.
    *     @var int $pageSize The maximum size per page is 100. Default is 100.
    *     @var string $paginationMode The paginationMode to use:
    - default: The total number of items in the collection will not be calculated.
    - totalCount: The total number of items in the collection will be calculated. This can mean loss of performance.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetAuthRoleIdentityCollectionUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetAuthRoleIdentityCollectionForbiddenException
    * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetAuthRoleIdentityCollectionInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\AuthRoleIdentityPaginatedCollection|\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function getAuthRoleIdentityCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint\GetAuthRoleIdentityCollection($queryParameters), $fetch);
    }
    /**
     * Create one or more role to identity assignments in this resource server
     *
     * @param \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\AuthRoleIdentityResource[] $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostAuthRoleIdentityCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostAuthRoleIdentityCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostAuthRoleIdentityCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostAuthRoleIdentityCollectionConflictException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostAuthRoleIdentityCollectionUnprocessableEntityException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostAuthRoleIdentityCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\AuthRoleIdentityResource[]|\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postAuthRoleIdentityCollection(array $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint\PostAuthRoleIdentityCollection($requestBody), $fetch);
    }
    /**
    * Get all available roles from this resource server
    *
    * @param array $queryParameters {
    *     @var int $page The page to read. Default is the first page.
    *     @var int $pageSize The maximum size per page is 100. Default is 100.
    *     @var string $paginationMode The paginationMode to use:
    - default: The total number of items in the collection will not be calculated.
    - totalCount: The total number of items in the collection will be calculated. This can mean loss of performance.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetAuthRoleCollectionUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetAuthRoleCollectionForbiddenException
    * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetAuthRoleCollectionInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\AuthRoleCollection|\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function getAuthRoleCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint\GetAuthRoleCollection($queryParameters), $fetch);
    }
    /**
     * Delete a role for this resource server
     *
     * @param string $roleCode Identifier for the role
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\DeleteAuthRoleBadRequestException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\DeleteAuthRoleUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\DeleteAuthRoleForbiddenException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\DeleteAuthRoleNotFoundException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\DeleteAuthRoleInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteAuthRole(string $roleCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint\DeleteAuthRole($roleCode), $fetch);
    }
    /**
     * Get a role from this resource server by its roleCode
     *
     * @param string $roleCode Identifier for the role
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetAuthRoleUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetAuthRoleForbiddenException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetAuthRoleNotFoundException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetAuthRoleInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\AuthRoleResource|\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getAuthRole(string $roleCode, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint\GetAuthRole($roleCode), $fetch);
    }
    /**
     * Patch a role for this resource server
     *
     * @param string $roleCode Identifier for the role
     * @param \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\NewAuthRoleResource $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PatchAuthRoleBadRequestException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PatchAuthRoleUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PatchAuthRoleForbiddenException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PatchAuthRoleNotFoundException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PatchAuthRoleInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\AuthRoleResource|\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function patchAuthRole(string $roleCode, \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\NewAuthRoleResource $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint\PatchAuthRole($roleCode, $requestBody), $fetch);
    }
    /**
     * Post a role for this resource server
     *
     * @param string $roleCode Identifier for the role
     * @param \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\NewAuthRoleResource $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostAuthRoleBadRequestException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostAuthRoleUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostAuthRoleForbiddenException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostAuthRoleConflictException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostAuthRoleInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\AuthRoleResource|\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function postAuthRole(string $roleCode, \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\NewAuthRoleResource $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint\PostAuthRole($roleCode, $requestBody), $fetch);
    }
    /**
     * Query Customer Pricing Profile collection by customer ids
     *
     * @param array $queryParameters {
     *     @var string $filter[customerIds] Comma seperated list of customer ids (optional)
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetCustomerPricingProfileCollectionEndpointUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetCustomerPricingProfileCollectionEndpointForbiddenException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetCustomerPricingProfileCollectionEndpointBadRequestException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetCustomerPricingProfileCollectionEndpointInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\CustomerPricingProfile[]|\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomerPricingProfileCollectionEndpoint(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint\GetCustomerPricingProfileCollectionEndpoint($queryParameters), $fetch);
    }
    /**
    * Add a new Customer Pricing Profile. You may not use this endpoint to add stepped prices to an
    existing pricing profile.
    *
    * @param \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\NewCustomerPricingProfile $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostCustomerPricingProfileUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostCustomerPricingProfileForbiddenException
    * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostCustomerPricingProfileUnprocessableEntityException
    * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostCustomerPricingProfileConflictException
    * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostCustomerPricingProfileBadRequestException
    * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostCustomerPricingProfileInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\CustomerPricingProfile|\Psr\Http\Message\ResponseInterface
    */
    public function postCustomerPricingProfile(\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\NewCustomerPricingProfile $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint\PostCustomerPricingProfile($requestBody), $fetch);
    }
    /**
     * Delete Customer Pricing Profile
     *
     * @param string $customerPricingProfileId Customer Pricing Profile Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\DeleteCustomerPricingProfileUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\DeleteCustomerPricingProfileForbiddenException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\DeleteCustomerPricingProfileBadRequestException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\DeleteCustomerPricingProfileInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteCustomerPricingProfile(string $customerPricingProfileId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint\DeleteCustomerPricingProfile($customerPricingProfileId), $fetch);
    }
    /**
     * Query Customer Pricing Profile by by its id
     *
     * @param string $customerPricingProfileId Customer Pricing Profile Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetCustomerPricingProfileUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetCustomerPricingProfileForbiddenException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetCustomerPricingProfileBadRequestException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetCustomerPricingProfileInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\CustomerPricingProfile|\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomerPricingProfile(string $customerPricingProfileId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint\GetCustomerPricingProfile($customerPricingProfileId), $fetch);
    }
    /**
    * Update one or more fields of a Customer Pricing Profile.\
    Please note, that existing stepped prices are replaced by the value you send via the request body, not supplemented.
    *
    * @param string $customerPricingProfileId Customer Pricing Profile Id
    * @param \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\PatchCustomerPricingProfile $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PatchCustomerPricingProfileUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PatchCustomerPricingProfileForbiddenException
    * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PatchCustomerPricingProfileUnprocessableEntityException
    * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PatchCustomerPricingProfileConflictException
    * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PatchCustomerPricingProfileBadRequestException
    * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PatchCustomerPricingProfileInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\CustomerPricingProfile|\Psr\Http\Message\ResponseInterface
    */
    public function patchCustomerPricingProfile(string $customerPricingProfileId, \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\PatchCustomerPricingProfile $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint\PatchCustomerPricingProfile($customerPricingProfileId, $requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getOpenApi(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint\GetOpenApi(), $fetch);
    }
    /**
     * Get the changelog in the specified format
     *
     * @param string $format Changelog file format
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetChangelogInFormatNotFoundException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetChangelogInFormatBadRequestException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getChangelogInFormat(string $format, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint\GetChangelogInFormat($format), $fetch);
    }
    /**
     * Get the openapi documentation in the specified format
     *
     * @param string $format Openapi file format
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getOpenApiInFormat(string $format, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint\GetOpenApiInFormat($format), $fetch);
    }
    /**
     * Query Organization Pricing Profile collection by organization ids
     *
     * @param array $queryParameters {
     *     @var string $filter[organizationIds] Comma seperated list of organization ids (optional)
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetOrganizationPricingProfileCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetOrganizationPricingProfileCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetOrganizationPricingProfileCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetOrganizationPricingProfileCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\OrganizationPricingProfile[]|\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getOrganizationPricingProfileCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint\GetOrganizationPricingProfileCollection($queryParameters), $fetch);
    }
    /**
    * Add a new Organization Pricing Profile. You may not use this endpoint to add stepped prices to an
    existing pricing profile.
    *
    * @param \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\NewOrganizationPricingProfile $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostOrganizationPricingProfileUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostOrganizationPricingProfileForbiddenException
    * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostOrganizationPricingProfileUnprocessableEntityException
    * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostOrganizationPricingProfileConflictException
    * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostOrganizationPricingProfileBadRequestException
    * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PostOrganizationPricingProfileInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\OrganizationPricingProfile|\Psr\Http\Message\ResponseInterface
    */
    public function postOrganizationPricingProfile(\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\NewOrganizationPricingProfile $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint\PostOrganizationPricingProfile($requestBody), $fetch);
    }
    /**
     * Delete Organization Pricing Profile
     *
     * @param string $organizationPricingProfileId Organization Pricing Profile Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\DeleteOrganizationPricingProfileUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\DeleteOrganizationPricingProfileForbiddenException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\DeleteOrganizationPricingProfileBadRequestException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\DeleteOrganizationPricingProfileInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return null|\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function deleteOrganizationPricingProfile(string $organizationPricingProfileId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint\DeleteOrganizationPricingProfile($organizationPricingProfileId), $fetch);
    }
    /**
     * Query Organization Pricing Profile by by its id
     *
     * @param string $organizationPricingProfileId Organization Pricing Profile Id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetOrganizationPricingProfileUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetOrganizationPricingProfileForbiddenException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetOrganizationPricingProfileBadRequestException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetOrganizationPricingProfileInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\OrganizationPricingProfile|\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getOrganizationPricingProfile(string $organizationPricingProfileId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint\GetOrganizationPricingProfile($organizationPricingProfileId), $fetch);
    }
    /**
    * Update one or more fields of a Organization Pricing Profile.\
    Please note, that existing stepped prices are replaced by the value you send via the request body, not supplemented.
    *
    * @param string $organizationPricingProfileId Organization Pricing Profile Id
    * @param \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\PatchOrganizationPricingProfile $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PatchOrganizationPricingProfileUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PatchOrganizationPricingProfileForbiddenException
    * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PatchOrganizationPricingProfileUnprocessableEntityException
    * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PatchOrganizationPricingProfileConflictException
    * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PatchOrganizationPricingProfileBadRequestException
    * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\PatchOrganizationPricingProfileInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\OrganizationPricingProfile|\Psr\Http\Message\ResponseInterface
    */
    public function patchOrganizationPricingProfile(string $organizationPricingProfileId, \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\PatchOrganizationPricingProfile $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint\PatchOrganizationPricingProfile($organizationPricingProfileId, $requestBody), $fetch);
    }
    /**
     * Get Price
     *
     * @param array $queryParameters {
     *     @var string $filter[customerId] Customer Id filter
     *     @var string $filter[skuCode] SKU Code filter
     *     @var string $filter[validFrom] Valid From Date filter
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetPriceCollectionUnauthorizedException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetPriceCollectionForbiddenException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetPriceCollectionBadRequestException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetPriceCollectionInternalServerErrorException
     * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\UnexpectedStatusCodeException
     *
     * @return \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\GetPriceCollectionResponseItem[]|\Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getPriceCollection(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint\GetPriceCollection($queryParameters), $fetch);
    }
    /**
    * Get Price Table for an Organization. The prices are sorted by: skuGroup:name, sku:name, validFrom,
    steppedPrices:validFromQuantity.
    *
    * @param array $queryParameters {
    *     @var string $filter[organizationId] Organization Id filter
    *     @var string $filter[validFrom] Valid From Date filter in UTC
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @param array $accept Accept content header text/csv|application/json
    * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetReportPriceUnauthorizedException
    * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetReportPriceForbiddenException
    * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetReportPriceBadRequestException
    * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\GetReportPriceInternalServerErrorException
    * @throws \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Exception\UnexpectedStatusCodeException
    *
    * @return \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface
    */
    public function getReportPrice(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT, array $accept = array())
    {
        return $this->executeEndpoint(new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Endpoint\GetReportPrice($queryParameters, $accept), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = array(), array $additionalNormalizers = array())
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = array();
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUrlFactory()->createUri('https://price-assessment-api.conqore.niceshops.com/v1');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = array(new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Datenkraft\Backbone\Client\PriceAssessmentApi\Generated\Normalizer\JaneObjectNormalizer());
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(array('json_decode_associative' => true)))));
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}