<?php
/**
 * Server-side rendering for the Miusage Data Table Block.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-metadata/#render
 */

use Deepak_Miusage_API_Integration\Includes\API_Handler;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


$attributes = $attributes ?? [];

$defaults = [
	'showID'        => true,
	'showFirstName' => true,
	'showLastName'  => true,
	'showEmail'     => true,
	'showDate'      => true,
];

$atts = wp_parse_args( $attributes, $defaults );

// Fetch data from transient.
$data = API_Handler::get_data();

if ( empty( $data ) || ! is_array( $data ) ) {
	echo '<p>' . esc_html__( 'No data available.', 'deepak-miusage-api-integration' ) . '</p>';
}

$rows = $data['data']['rows'] ?? [];

if ( empty( $rows ) ) {
	echo '<p>' . esc_html__( 'No rows to display.', 'deepak-miusage-api-integration' ) . '</p>';
}

?>
<div <?php echo get_block_wrapper_attributes(); ?>>
	<table>
		<thead>
			<tr>
				<?php if ( $atts['showID'] ) : ?><th><?php esc_html_e( 'ID', 'deepak-miusage-api-integration' ); ?></th><?php endif; ?>
				<?php if ( $atts['showFirstName'] ) : ?><th><?php esc_html_e( 'First Name', 'deepak-miusage-api-integration' ); ?></th><?php endif; ?>
				<?php if ( $atts['showLastName'] ) : ?><th><?php esc_html_e( 'Last Name', 'deepak-miusage-api-integration' ); ?></th><?php endif; ?>
				<?php if ( $atts['showEmail'] ) : ?><th><?php esc_html_e( 'Email', 'deepak-miusage-api-integration' ); ?></th><?php endif; ?>
				<?php if ( $atts['showDate'] ) : ?><th><?php esc_html_e( 'Date', 'deepak-miusage-api-integration' ); ?></th><?php endif; ?>
			</tr>
		</thead>
		<tbody>
			<?php foreach ( $rows as $row ) : ?>
				<tr>
					<?php if ( $atts['showID'] ) : ?><td><?php echo esc_html( $row['id'] ); ?></td><?php endif; ?>
					<?php if ( $atts['showFirstName'] ) : ?><td><?php echo esc_html( $row['fname'] ); ?></td><?php endif; ?>
					<?php if ( $atts['showLastName'] ) : ?><td><?php echo esc_html( $row['lname'] ); ?></td><?php endif; ?>
					<?php if ( $atts['showEmail'] ) : ?><td><?php echo esc_html( $row['email'] ); ?></td><?php endif; ?>
					<?php if ( $atts['showDate'] ) : ?><td><?php echo esc_html( date( 'Y-m-d H:i', (int) $row['date'] ) ); ?></td><?php endif; ?>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>
<?php
