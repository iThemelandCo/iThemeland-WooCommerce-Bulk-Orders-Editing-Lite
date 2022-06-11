<?php

namespace wobef\classes\helpers;

class Industry_Helper
{
    public static function get_industries()
    {
        return [
            'Automotive and Transportation' => esc_html__('Automotive', WOBEF_NAME),
            'AdTech and AdNetwork' => esc_html__('AdTech and AdNetwork', WOBEF_NAME),
            'Agency' => esc_html__('Agency', WOBEF_NAME),
            'B2B Software' => esc_html__('B2B Software', WOBEF_NAME),
            'B2C Internet Services' => esc_html__('B2C Internet Services', WOBEF_NAME),
            'Classifieds' => esc_html__('Classifieds', WOBEF_NAME),
            'Consulting and Market Research' => esc_html__('Consulting and Market Research', WOBEF_NAME),
            'CPG, Food and Beverages' => esc_html__('CPG', WOBEF_NAME),
            'Education' => esc_html__('Education', WOBEF_NAME),
            'Education (student)' => esc_html__('Education (Student)', WOBEF_NAME),
            'Equity Research' => esc_html__('Equity Research', WOBEF_NAME),
            'Financial services' => esc_html__('Financial Services', WOBEF_NAME),
            'Gambling / Gaming' => esc_html__('Gambling and Gaming', WOBEF_NAME),
            'Hedge Funds and Asset Management' => esc_html__('Hedge Funds and Asset Management', WOBEF_NAME),
            'Investment Banking' => esc_html__('Investment Banking', WOBEF_NAME),
            'Logistics and Shipping' => esc_html__('Logistics and Shipping', WOBEF_NAME),
            'Payments' => esc_html__('Payments', WOBEF_NAME),
            'Pharma and Healthcare' => esc_html__('Pharma and Healthcare', WOBEF_NAME),
            'Private Equity and Venture Capital' => esc_html__('Private Equity and Venture Capital', WOBEF_NAME),
            'Media and Entertainment' => esc_html__('Publishers and Media', WOBEF_NAME),
            'Government Public Sector & Non Profit' => esc_html__('Public Sector, Non Profit, Fraud and Compliance', WOBEF_NAME),
            'Retail / eCommerce' => esc_html__('Retail and eCommerce', WOBEF_NAME),
            'Telecom and Hardware' => esc_html__('Telecom', WOBEF_NAME),
            'Travel and Hospitality' => esc_html__('Travel', WOBEF_NAME),
            'Other' => esc_html__('Other', WOBEF_NAME),
        ];
    }
}
