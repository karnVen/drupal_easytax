<?php

namespace Drupal\easytax_dashboard\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for EasyTax Dashboard routes.
 */
class DashboardController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function index() {
    // Dummy data to mimic Laravel dashboard structure.
    $stats = [
      'total_users' => 1500,
      'active_applications' => 342,
      'pending_services' => 89,
      'revenue' => '₹4,50,000',
    ];

    $recent_applications = [
      ['id' => 'APP-001', 'user' => 'John Doe', 'status' => 'Pending', 'date' => '2026-06-01'],
      ['id' => 'APP-002', 'user' => 'Jane Smith', 'status' => 'Approved', 'date' => '2026-05-31'],
      ['id' => 'APP-003', 'user' => 'Acme Corp', 'status' => 'Processing', 'date' => '2026-05-30'],
      ['id' => 'APP-004', 'user' => 'Global Tech', 'status' => 'Pending', 'date' => '2026-05-29'],
    ];

    return [
      '#theme' => 'easytax_dashboard_page',
      '#stats' => $stats,
      '#recent_applications' => $recent_applications,
      '#attached' => [
        'library' => [
          'easytax_dashboard/dashboard_assets',
        ],
      ],
    ];
  }

}
